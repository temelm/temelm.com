<script>
  export let href = '#';
  export let target = undefined;
  export let rel = undefined;
  export let className = undefined;
  export let title = undefined;
  export let src = undefined;
  export let alt = undefined;
  export let text = undefined;

  if (target === '_blank') {
    rel = 'noopener noreferrer';
  }

  function handleClick (event) {
    if (/^#/.test(href)) {
      event.preventDefault();
      let offsetTop = 0;
      if (href !== '#') {
        const element = document.querySelector(href);
        const elementTop = element.getBoundingClientRect().top;
        offsetTop = window.scrollY + elementTop - 32;
      }
      window.scrollTo({
        top: offsetTop,
        behavior: 'smooth'
      });
    }
  }
</script>

<a {href} {target} {rel} class={className} {title} on:click={handleClick}>
  {#if src}
    <img {src} {alt} />
  {/if}
  {#if text}
    <span>{text}</span>
  {/if}
</a>

<style>
  :root {
    --color-button: var(--color-background);
    --color-button-border: var(--color-accent);
    --color-button-hover: var(--color-accent);
    --color-button-text: var(--color-accent);
    --color-button-text-hover: var(--color-background);
    --color-link-text: var(--color-text);
  }

  a {
    align-items: center;
    color: var(--color-link-text);
    display: inline-flex;
    text-decoration-color: transparent;
    text-underline-offset: 0.25rem;
    transition: text-decoration-color 0.15s ease-in-out, transform 0.15s ease-in-out;
  }

  a:hover {
    text-decoration-color: var(--color-link-text);
    transform: scale(1.05);
  }

  a img {
    max-width: 2rem;
    width: 100%;
  }

  /* @TODO: CHANGE CLASS NAME */
  a.PLACEHOLDER img {
    border-radius: var(--border-radius);
    max-width: var(--max-width-portfolio-item-logo);
  }

  a:has(img) span {
    margin-left: var(--spacing-small);
  }

  a.button {
    background-color: var(--color-button);
    border: 1px solid var(--color-button-border);
    border-radius: var(--border-radius);
    color: var(--color-button-text);
    padding: var(--spacing-small);
    text-align: center;
    transition: background-color 0.15s ease-in-out, color 0.15s ease-in-out
      , transform 0.15s ease-in-out;
  }

  a.button:hover {
    background-color: var(--color-button-hover);
    color: var(--color-button-text-hover);
    text-decoration: none;
  }

  @media screen and (min-width: 960px) {
    a.PLACEHOLDER img {
      max-width: 400px;
    }
  }

  
</style>