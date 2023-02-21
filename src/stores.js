import { writable } from 'svelte/store';

export const toasts = writable([]);

export const showToast = (message, type='info', timeout=4000) => {
  const id = `${Math.floor(Math.random() * Date.now())}`;
  const toast = {
    id,
    message,
    type,
    timeout
  };

  toasts.update(all => [toast, ...all]);

  if (toast.timeout) {
    setTimeout(() => dismissToast(id), toast.timeout);
  }
};

export const dismissToast = (id) => {
  toasts.update(all => all.filter(t => t.id !== id));
};