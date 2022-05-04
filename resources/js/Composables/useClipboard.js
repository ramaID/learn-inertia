import { ref } from 'vue'

export function useClipboard(text) {
    let copied = ref(false),
        supported = navigator && 'clipboard' in navigator,
        copy = () => {
            if (supported) {
                navigator.clipboard.writeText(text)

                copied.value = true

                setTimeout(() => {
                    copied.value = false
                }, 300)

                return
            }

            alert('not working')
        }

    return { copy, copied, supported }
}
