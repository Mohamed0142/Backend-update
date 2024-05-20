
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments</title>
</head>
<body>
    <h1>Appointments</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Colors</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Date</th>
                <th>Nail Biting</th>
                <th>Massage</th>
                <th>Nail Repair</th>
            </tr>
        </thead>
        <tbody>
            {% for result in results %}
                <tr>
                    <td>{{ result.id }}</td>
                    <td>{{ result.colors }}</td>
                    <td>{{ result.phone_number }}</td>
                    <td>{{ result.email }}</td>
                    <td>{{ result.appointment_date }}</td>
                    <td>{{ result.nail_biting ? 'Yes' : 'No' }}</td>
                    <td>{{ result.massage ? 'Yes' : 'No' }}</td>
                    <td>{{ result.nail_repair ? 'Yes' : 'No' }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
</body>
</html>
