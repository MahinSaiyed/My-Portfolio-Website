
function toggleMenu() {
    const navbarLinks = document.getElementById('navbar-links');
    navbarLinks.classList.toggle('active');
}

  document.getElementById('whatsapp-form').addEventListener('submit', function(e) {
    e.preventDefault();

    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const subject = document.getElementById('subject').value.trim();
    const message = document.getElementById('message').value.trim();

    const phoneNumber = "918347874084"; // बिना + के भी चलेगा

    const text = `Hello, my name is ${name}.
Email: ${email}
Subject: ${subject}
Message: ${message}`;

    const url = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(text)}`;
    window.open(url, '_blank');
  });
