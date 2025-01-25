<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Baru</title>
</head>

<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f4f9f4; color: #333;">
    <table cellpadding="0" cellspacing="0" width="100%"
        style="max-width: 600px; margin: 20px auto; background-color: #ffffff; border: 1px solid #e3e3e3; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden;">
        <!-- Header -->
        <tr style="background-color: #38a169;">
            <td style="padding: 20px; text-align: center; color: #ffffff;">
                <h1 style="margin: 0; font-size: 24px;">Pesan Baru</h1>
            </td>
        </tr>
        <!-- Content -->
        <tr>
            <td style="padding: 20px;">
                <p style="margin: 0 0 12px; font-size: 16px; color: #4a5568;">Anda telah menerima pesan baru:</p>
                <table cellpadding="0" cellspacing="0" width="100%"
                    style="margin-top: 10px; border-collapse: collapse;">
                    <tr>
                        <td style="padding: 8px 0; font-weight: bold; color: #2f855a;">Nama:</td>
                        <td style="padding: 8px 0; color: #4a5568;">{{ $data['name'] }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px 0; font-weight: bold; color: #2f855a;">Email:</td>
                        <td style="padding: 8px 0; color: #4a5568;">{{ $data['email'] }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px 0; font-weight: bold; color: #2f855a;">Pesan:</td>
                        <td style="padding: 8px 0; color: #4a5568;">{{ $data['message'] }}</td>
                    </tr>
                </table>
            </td>
        </tr>
        <!-- Footer -->
        <tr style="background-color: #f4f9f4; text-align: center;">
            <td style="padding: 10px; font-size: 12px; color: #718096;">
                <p style="margin: 0;">Pesan ini dikirim melalui formulir kontak Anda.</p>
            </td>
        </tr>
    </table>
</body>

</html>
