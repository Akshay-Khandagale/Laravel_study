<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>
<body>
    <h1>Student List</h1>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Image</th>
            </tr>
        </thead>    
        <tbody id="studentList">
    </table>
    <script>
        document.addEventListener("DOMContentLoaded", async () => {

            try {

                const response = await fetch("/api/show-StudList");

                if (!response.ok) {
                    throw new Error("Failed to fetch data");
                }

                const students = await response.json();

                let html = "";

                students.forEach(student => {
                    html += `
                        <tr>
                            <td>${student.id}</td>
                            <td>${student.name}</td>
                            <td>${student.email}</td>
                            <td>
                                <img src="/storage/${student.image}" width="70">
                            </td>
                        </tr>
                    `;
                });

                document.getElementById("studentList").innerHTML = html;

            } catch (error) {
                console.error(error);
            }

        });
    </script>
</body>
</html>