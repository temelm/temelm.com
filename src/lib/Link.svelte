<script>
  export let href = '#';
  export let target = undefined;
  export let rel = undefined;
  export let className = undefined;
  export let title = undefined;
  export let onClick = undefined;
  export let src = undefined;
  export let alt = undefined;
  export let hasSvgIcon = undefined;
  export let text = undefined;

  if (target === '_blank') {
    rel = 'noopener noreferrer';
  }

  if (/^#/.test(href) && typeof onClick !== 'function') {
    onClick = event => {
      event.preventDefault();
      let top = 0;
      if (href !== '#') {
        const element = document.querySelector(href);
        const elementTop = element.getBoundingClientRect().top;
        const elementMarginTop = parseInt(getComputedStyle(element).marginTop);
        const elementPaddingTop = parseInt(getComputedStyle(element).paddingTop);
        top = scrollY + elementTop - elementMarginTop - elementPaddingTop;
      }
      scrollTo({
        top,
        behavior: 'smooth'
      });
    };
  }
</script>

<a {href} {target} {rel} class={className} {title} on:click={onClick}>
  {#if src}
    <img {src} {alt} />
  {/if}
  {#if hasSvgIcon}
    <slot />
  {/if}
  {#if text}
    <span>{text}</span>
  {/if}
</a>

<style>
  a {
    --link-button-border-color: var(--accent-color);
    --link-button-color: var(--background-color-primary);
    --link-button-hover-color: var(--accent-color);
    --link-button-hover-text-color: var(--background-color-primary);
    --link-button-text-color: var(--accent-color);
    --link-img-max-width: var(--img-max-width, 2rem);
    --link-text-color: var(--text-color);

    align-items: center;
    color: var(--link-text-color);
    display: inline-flex;
    text-decoration-color: transparent;
    text-underline-offset: var(--spacing-xs);
    transition: text-decoration-color 0.15s ease-in-out, transform 0.15s ease-in-out;
  }

  a:hover {
    text-decoration-color: var(--link-text-color);
    transform: scale(1.05);
  }

  a.button {
    background-color: var(--link-button-color);
    border: 1px solid var(--link-button-border-color);
    border-radius: var(--border-radius);
    box-shadow: 1px 1px 8px 1px rgba(0, 0, 0, 0.25);
    color: var(--link-button-text-color);
    padding: var(--spacing-sm);
    text-align: center;
    transition: background-color 0.15s ease-in-out, color 0.15s ease-in-out
      , transform 0.15s ease-in-out;
  }

  a.button:hover {
    background-color: var(--link-button-hover-color);
    color: var(--link-button-hover-text-color);
    text-decoration: none;
  }

  a img {
    border-radius: var(--border-radius);
    max-width: var(--link-img-max-width);
    width: 100%;
  }

  a:has(img) span, a:has(svg) span {
    margin-left: var(--spacing-sm);
  }
</style>