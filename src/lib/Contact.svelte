<script>
  import { showToast } from '../stores';

  const onSubmit = event => {
    const form = event.target;

    const data = {};
    ['name', 'email', 'company', 'message'].forEach(fieldName => {
      const field = form.querySelector(`[name="${fieldName}"]`);
      if (field && field.value) {
        data[fieldName] = field.value;
      }
    });

    if (data.name && data.email && data.message) {
      const submitButton = document.querySelector('#send');
      submitButton.setAttribute('disabled', 'true');

      const options = {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json; charset=utf-8'
        },
        body: JSON.stringify(data)
      };

      fetch('mail.php', options)
        .then(response => response.text())
        .then(text => {
          if (text === 'success') {
            form.reset();
            showToast('Sent.', 'success');
          } else if (text === 'error') {
            showToast('Your message was not sent. Please try again.', 'error');
          } else {
            if (!/temelm.com$/i.test(location.hostname)) {
              console.log(text);
            }
          }
          setTimeout(() => {
            submitButton.removeAttribute('disabled');
          }, 1000);
        })
        .catch(error => {
          if (!/temelm.com$/i.test(location.hostname)) {
            console.error(error);
          }
        });
    } else {
      showToast('Your message was not sent. Please try again.', 'error');
    }
  };
</script>

<section id="contact">
  <h1>Contact</h1>
  <div class="contact-form">
    <form action="mail.php" method="post" on:submit|preventDefault={onSubmit}>
      <div class="contact-form-field">
        <input type="text" name="name" id="name" placeholder="Your name" required />
      </div>
      <div class="contact-form-field">
        <input type="email" name="email" id="email" placeholder="Your email" required />
      </div>
      <div class="contact-form-field">
        <input type="text" name="company" id="company" placeholder="Your company (optional)" />
      </div>
      <div class="contact-form-field">
        <textarea name="message" id="message" rows="12" placeholder="Your message" required />
      </div>
      <div class="contact-form-field">
        <button type="submit" id="send">Send</button>
      </div>
    </form>
  </div>
</section>

<style>
  .contact-form {
    margin: 0 auto;
    max-width: 480px;
  }

  .contact-form-field:not(:last-child) {
    margin-bottom: var(--spacing-md);
  }

  input, textarea, button {
    box-shadow: 1px 1px 8px 1px rgba(0, 0, 0, 0.25);
  }

  input, textarea {
    background-color: var(--background-color-secondary);
    border: 1px solid var(--border-color);
    border-radius: var(--border-radius);
    font-family: var(--font-family);
    font-size: 1rem;
    font-weight: var(--font-weight);
    padding: var(--spacing-sm);
    width: 100%;
  }

  input:focus, textarea:focus {
    outline-color: var(--accent-color);
  }

  textarea {
    display: flex;
    resize: none;
  }

  button {
    background-color: var(--accent-color);
    border: none;
    border-radius: var(--border-radius);
    color: var(--background-color-primary);
    cursor: pointer;
    font-size: 1rem;
    padding: var(--spacing-md) var(--spacing-lg);
    text-align: center;
    transition: transform 0.15s ease-in-out;
  }

  button:hover {
    transform: scale(1.05);
  }

  button:disabled {
    cursor: wait;
    opacity: 0.5;
    transform: scale(1);
  }
</style>