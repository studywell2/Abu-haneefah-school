<div style="font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 20px;">
    <div style="max-width: 600px; margin: auto; background-color: #ffffff; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); padding: 30px;">
        <h2 style="color: #28a745; text-align: center; margin-bottom: 20px;">🎓 New Admission Application</h2>

        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="padding: 8px; font-weight: bold; width: 35%;">Student Name:</td>
                <td style="padding: 8px;">{{ $data['student_name'] }}</td>
            </tr>
            <tr style="background-color: #f2f2f2;">
                <td style="padding: 8px; font-weight: bold;">Date of Birth:</td>
                <td style="padding: 8px;">{{ $data['dob'] }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; font-weight: bold;">Grade:</td>
                <td style="padding: 8px;">{{ $data['grade'] }}</td>
            </tr>
            <tr style="background-color: #f2f2f2;">
                <td style="padding: 8px; font-weight: bold;">Parent Name:</td>
                <td style="padding: 8px;">{{ $data['parent_name'] }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; font-weight: bold;">Email:</td>
                <td style="padding: 8px;">{{ $data['email'] }}</td>
            </tr>
            <tr style="background-color: #f2f2f2;">
                <td style="padding: 8px; font-weight: bold;">Phone:</td>
                <td style="padding: 8px;">{{ $data['phone'] }}</td>
            </tr>
        </table>

        <p style="text-align: center; margin-top: 25px; color: #555;">
            Please review the application and contact the parent if necessary.
        </p>
    </div>
</div>
