// script.js

console.log('hello');
document.addEventListener('mousemove', (event) => {
    const mask = document.querySelector('.mask');
    
    // Get mouse position
    const x = event.clientX;
    const y = event.clientY;
    
    // Update CSS variables
    mask.style.setProperty('--cursor-x', `${x}px`);
    mask.style.setProperty('--cursor-y', `${y}px`);
    mask.style.clipPath = `circle(100px at ${x}px ${y}px)`;
});
