<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Web Page</title>
</head>
<body>

<x-nav-links></x-nav-links>
<div>
    <form action="{{ route('contact.submit') }}" method="POST">
        @csrf

        <!-- Name -->
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
        </div>

        <!-- Email -->
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>

        <!-- Message -->
        <div>
            <label for="message">Message:</label>
            <textarea name="message" id="message" rows="4" required></textarea>
        </div>

        <!-- Submit -->
        <div>
            <button type="submit">Send Message</button>
        </div>
    </form>
</div>
</body>
</html>
