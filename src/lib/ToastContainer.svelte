<script>
  import { dismissToast, toasts } from '../stores';
  import Toast from './Toast.svelte';
</script>

{#if $toasts}
  <div class="toast-container">
    {#each $toasts as toast}
      <Toast type={toast.type} on:dismiss={() => dismissToast(toast.id)}>
        {toast.message}
      </Toast>
    {/each}
  </div>
{/if}

<style>
  .toast-container {
    max-width: var(--min-width);
    min-width: 160px;
    position: fixed;
    top: 4rem;
    width: 100%;
    z-index: 2;
  }

  @media screen and (max-width: 767px) {
    .toast-container {
      left: 50%;
      transform: translateX(-50%);
    }
  }

  @media screen and (min-width: 768px) {
    .toast-container {
      right: var(--spacing-lg);
    }
  }
</style>