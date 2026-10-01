<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pesan Baru</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <h2 style="color: #5540af;">Pesan Baru dari Website</h2>

    <table style="width: 100%; border-collapse: collapse;">
        <tr>
            <td style="padding: 8px 0; font-weight: bold; width: 120px;">Nama</td>
            <td style="padding: 8px 0;">{{ $senderName }}</td>
        </tr>
        <tr>
            <td style="padding: 8px 0; font-weight: bold;">Email</td>
            <td style="padding: 8px 0;">{{ $senderEmail }}</td>
        </tr>
    </table>

    <hr style="margin: 20px 0; border: none; border-top: 1px solid #ddd;">

    <h3 style="color: #5540af;">Pesan:</h3>
    <div style="background: #f8f9fa; padding: 15px; border-radius: 6px;">
        {!! nl2br(e($messageBody)) !!}
    </div>

    <p style="margin-top: 20px; font-size: 12px; color: #666;">
        Pesan ini dikirim dari formulir kontak di website Anda.
    </p>
</body>
</html>