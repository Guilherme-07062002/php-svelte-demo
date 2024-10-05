<script>
const svelte_script = document.createElement('script');
svelte_script.type = 'text/javascript';
svelte_script.defer = true;
svelte_script.src = './svelte/public/build/bundle.js';
document.head.appendChild(svelte_script);

const svelte_global_stylesheet = document.createElement('link');
svelte_global_stylesheet.rel = 'stylesheet';
svelte_global_stylesheet.href = './svelte/public/global.css';
document.head.appendChild(svelte_global_stylesheet);

const svelte_compiled_stylesheet = document.createElement('link');
svelte_compiled_stylesheet.rel = 'stylesheet';
svelte_compiled_stylesheet.href = './svelte/public/build/bundle.css';
document.head.appendChild(svelte_compiled_stylesheet);
</script>

<?php
echo "Olá, Pamonha!";
?>

<div id="svelte-app"></div>