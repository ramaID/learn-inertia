import hljs from 'highlight.js/lib/common'
import js from 'highlight.js/lib/languages/javascript'
import php from 'highlight.js/lib/languages/php'
import html from 'highlight.js/lib/languages/xml'
import yaml from 'highlight.js/lib/languages/yaml'

import 'highlight.js/styles/github-dark.css'

hljs.registerLanguage('javascript', js)
hljs.registerLanguage('php', php)
hljs.registerLanguage('html', html)
hljs.registerLanguage('yaml', yaml)

export function highlight(selector) {
    if (!selector) {
        hljs.highlightAll()

        return
    }

    document.querySelectorAll(selector + ' pre code').forEach(highlightElement)
}

export function highlightElement(element) {
    hljs.highlightElement(element)
}
