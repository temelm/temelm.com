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
    --header-color: rgb(245, 245, 245, 0.95);
  }

  header {
    background-color: var(--header-color);
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
    padding: var(--spacing-md);
  }

  header nav ul {
    list-style: none;
  }

  header nav ul li {
    display: inline-block;
    margin-left: var(--spacing-sm);
  }
  
  header nav ul li:first-child {
    margin-left: 0;
  }

  @media (prefers-color-scheme: dark) {
    :root {
      --header-color: rgb(64, 64, 64, 0.95);
    }
  }
</style>