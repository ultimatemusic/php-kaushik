<div style="font-family: sans-serif; line-height:1.5; color:#111">
    <h2>New contact message</h2>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Subject:</strong> {{ $data['subject'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ nl2br(e($data['description'])) }}</p>
</div>