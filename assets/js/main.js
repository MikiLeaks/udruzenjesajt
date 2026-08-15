
const hamburger=document.querySelector('.hamburger');
const mobile=document.querySelector('.mobile-panel');
if(hamburger&&mobile){hamburger.addEventListener('click',()=>{mobile.classList.toggle('open');hamburger.setAttribute('aria-expanded',mobile.classList.contains('open'));});}
document.querySelectorAll('.faq-q').forEach(btn=>btn.addEventListener('click',()=>btn.parentElement.classList.toggle('open')));
const banner=document.querySelector('.cookie-banner');
if(banner && localStorage.getItem('mwdCookies')) banner.classList.add('hidden');
document.querySelectorAll('[data-cookie]').forEach(btn=>btn.addEventListener('click',()=>{localStorage.setItem('mwdCookies',btn.dataset.cookie);banner?.classList.add('hidden');}));
document.querySelectorAll('form[data-demo-form]').forEach(form=>form.addEventListener('submit',e=>{e.preventDefault();const out=form.querySelector('.form-message');if(out){out.textContent='Forma je uspešno popunjena u demo prikazu. Za slanje sa sajta potrebno je povezati e-mail servis ili WordPress dodatak.';out.style.display='block';}form.reset();}));
document.querySelectorAll('[data-year]').forEach(el=>el.textContent=new Date().getFullYear());
