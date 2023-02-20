<script>
  import Link from './Link.svelte';

  const copyrightYear = new Date().getFullYear();
</script>

<footer>
  <div class="social">
    <Link href="//github.com/temelm" target="_blank" text="GitHub" />
    <Link href="//www.linkedin.com/in/mustafa-temel-b3908b2a" target="_blank" text="LinkedIn" />
  </div>
  <div class="copyright">
    <span role="img" aria-label="Copyright">©️</span>
    <span>{copyrightYear} Mustafa Temel</span>
  </div>
</footer>

<style>
  footer {
    font-size: 0.75rem;
    opacity: 0.75;
    padding: var(--spacing-lg);
    text-align: center;
  }

  .social {
    column-gap: var(--spacing-sm);
    display: flex;
    justify-content: center;
    margin-bottom: var(--spacing-sm);
  }

  @media (prefers-color-scheme: dark) {
    footer {
      opacity: 0.5;
    }
  }
</style>