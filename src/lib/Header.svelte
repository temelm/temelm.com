<script>
  import Link from './Link.svelte';
</script>

<header>
  <nav>
    <Link text="Mustafa Temel" />
    <ul>
      <li>
        <Link href="#portfolio" text="Portfolio" />
      </li>
      <li>
        <Link href="#contact" text="Contact" />
      </li>
    </ul>
  </nav>
</header>

<style>
  :root {
    --color-header: rgb(245, 245, 245, 0.95);
  }

  header {
    background-color: var(--color-header);
    border-bottom: 1px solid var(--color-border);
    position: sticky;
    top: 0;
    width: 100%;
    z-index: 1;
  }

  header nav {
    align-items: center;
    display: flex;
    justify-content: space-between;
    margin: 0 auto;
    max-width: var(--max-width);
    padding: var(--spacing-medium);
  }

  header nav ul {
    list-style: none;
  }

  header nav ul li {
    display: inline-block;
    margin-left: var(--spacing-small);
  }

  header nav ul li:first-child {
    margin-left: 0;
  }

  @media (prefers-color-scheme: dark) {
    :root {
      --color-header: rgb(64, 64, 64, 0.95);
    }
  }
</style>