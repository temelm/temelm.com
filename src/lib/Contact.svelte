<section id="contact">
  <h1>Contact</h1>
  <div class="contact-form">
    <form action="mail.php" method="post">
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
    margin-bottom: var(--spacing-medium);
  }

  input, textarea {
    background-color: var(--color-bcakground-PLACEHOLDER);
    border: 1px solid var(--color-border);
    border-radius: var(--border-radius);
    font-family: var(--font-family);
    font-size: 1rem;
    font-weight: var(--font-weight);
    padding: var(--spacing-small);
    width: 100%;
  }

  input:focus, textarea:focus {
    outline-color: var(--color-accent);
  }

  textarea {
    display: flex;
    resize: none;
  }

  button {
    background-color: var(--color-accent);
    border: none;
    border-radius: var(--border-radius);
    color: var(--color-background);
    cursor: pointer;
    font-size: 1rem;
    padding: var(--spacing-medium) var(--spacing-large);
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