<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f4f9;
            color: #333;
            line-height: 1.6;
        }

        header {
            background: linear-gradient(to right, #1e3c72, #2a5298, #000); /* Gradasi Biru dan Hitam */
            color: white;
            padding: 2rem;
            text-align: center;
        }

        header h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        .container {
            max-width: 900px;
            margin: 2rem auto;
            padding: 2rem;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        section {
            margin-bottom: 2rem;
        }

        section h2 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            color: #2a5298; /* Biru */
        }

        form {
            display: grid;
            grid-gap: 1rem;
        }

        label {
            font-weight: bold;
        }

        input[type="text"], input[type="email"], textarea {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            width: 100%;
        }

        textarea {
            resize: vertical;
        }

        button {
            background-color: #2a5298; /* Biru */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
        }

        button:hover {
            background-color: #1e3c72; /* Biru Tua */
        }

        footer {
            text-align: center;
            margin-top: 2rem;
            padding: 1rem 0;
            background: #333; /* Hitam */
            color: white;
        }

        .contact-info {
            margin-top: 2rem;
        }

        .contact-info p {
            margin: 0.5rem 0;
        }

        .highlight {
            font-weight: bold;
            color: #2a5298; /* Biru */
        }

        .instagram-embed {
            margin-top: 2rem;
        }

        iframe {
            width: 100%;
            max-width: 500px;
            height: 600px;
            border: none;
            border-radius: 10px;
        }

        .contact-links {
            margin-top: 1rem;
        }

        .contact-links a {
            color: #2a5298; /* Biru */
            text-decoration: none;
            font-weight: bold;
        }

        .contact-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Contact</h1>
        <p>Feel free to get in touch with me!</p>
    </header>

    <div class="container">
        <section>
            <h2>Contact Form</h2>
            <form action="#" method="POST">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>

                <label for="email">Your Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>

                <label for="message">Your Message</label>
                <textarea id="message" name="message" rows="4" placeholder="Write your message" required></textarea>

                <button type="submit">Send Message</button>
            </form>
        </section>

        <section class="contact-info">
            <h2>Other Contact Information</h2>
            <p><span class="highlight">Email:</span> <a href="mailto:mhdzan0702@gmail.com">mhdzan0702@gmail.com</a></p>
            <p><span class="highlight">Phone:</span> <a href="https://wa.me/082237068987" target="_blank">082237068987</a></p>
            <p><span class="highlight">Location:</span> Sewon, Bantul</p>
        </section>

        <section class="instagram-embed">
            <h2>Instagram Highlights</h2>
            <!-- Replace the below iframe with your Instagram embed code -->
            <iframe src="https://www.instagram.com/pgrnzan_/embed" scrolling="no" allowtransparency="true"></iframe>
        </section>

        <section class="contact-links">
            <h2>Quick Links</h2>
            <p><a href="https://wa.me/082237068987" target="_blank">Chat with me on WhatsApp</a></p>
            <p><a href="mailto:mhdzan0702@gmail.com">Send me an Email</a></p>
        </section>
    </div>

    <footer>
        <p>&copy; 2025 M Fauzan. All rights reserved.</p>
    </footer>
</body>
</html>
