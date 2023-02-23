<script>
  import { createEventDispatcher } from 'svelte';
  import { scale } from 'svelte/transition';
  import Link from './Link.svelte';
  import CloseIcon from './CloseIcon.svelte';

  export let type = 'info';

  const dispatch = createEventDispatcher();

  const handleDismiss = event => {
    event.preventDefault();
    dispatch('dismiss');
  };
</script>

<div class={`toast toast-${type}`} transition:scale>
  <span class="toast-text">
    <slot />
  </span>
  <Link className="toast-dismiss" title="Dismiss message" onClick={handleDismiss} hasSvgIcon="true">
    <CloseIcon width="1.125rem" />
  </Link>
</div>

<style>
  .toast {
    align-items: center;
    border-radius: var(--border-radius);
    box-shadow: 1px 1px 8px 1px rgba(0, 0, 0, 0.25);
    color: white;
    column-gap: var(--spacing-md);
    display: flex;
    justify-content: space-between;
    margin-bottom: var(--spacing-md);
    padding: var(--spacing-md);
  }

  .toast:last-child {
    margin-bottom: 0;
  }

  .toast-info {
    background-color: #007AFF;
  }

  .toast-success {
    background-color: #34C759;
  }

  .toast-error {
    background-color: #FF3B30;
  }

  :global(.toast a.toast-dismiss) {
    color: white;
  }
</style>