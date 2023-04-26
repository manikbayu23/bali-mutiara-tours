window.addEventListener('scroll', () => {
    if (window.scrollY > 0) {
        document.getElementById('header').style.backgroundColor = 'white';
        document.getElementById('header').style.borderBottomColor = 'white';
        document.getElementById('header').style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.1)';

    } else {
        document.getElementById('header').style.backgroundColor = 'transparent';
        document.getElementById('header').style.borderBottomColor = 'transparent';
        document.getElementById('header').style.boxShadow = 'none';

    }
});

var h2 = document.querySelector('h2');
// Menambahkan kelas 'show' saat halaman selesai dimuat
window.addEventListener('load', function () {
    h2.classList.add('show');
});

const tahunSpan = document.getElementById('tahun');
const tahunSekarang = new Date().getFullYear();
tahunSpan.textContent = tahunSekarang;

const MyNamespace = {
    init: function () {
        const comments = document.querySelector('.comments');

        setInterval(function () {
            comments.scrollBy(0, 1); // atur kecepatan scroll di sini
            if (comments.scrollTop >= comments.scrollHeight - comments.offsetHeight) {
                comments.scrollTop = 0;
            }
        }, 20); // atur interval scroll di sini
    }
};

const checkbox = document.getElementById('checkbox');
const header = document.getElementById('header');
const sidebar = document.getElementById('sidebar');
const contentAdmin = document.getElementById('content-admin');
const linkTexts = document.querySelectorAll('.link-text');

checkbox.addEventListener('change', function () {
    if (this.checked) {
        header.classList.remove('hidden');
        sidebar.classList.remove('hidden');
        contentAdmin.classList.remove('hidden');
        linkTexts.forEach(linkText => {
            linkText.classList.remove('hidden');
        });
    } else {
        header.classList.add('hidden');
        sidebar.classList.add('hidden');
        contentAdmin.classList.add('hidden');
        linkTexts.forEach(linkText => {
            linkText.classList.add('hidden');
        });
    }
});

const dropdownBtn = document.querySelector('.dropdown-btn');
const dropdownUsers = document.querySelector('.dropdown-users');

dropdownBtn.addEventListener('click', function () {
    dropdownUsers.classList.toggle('show');

});
document.addEventListener('click', function (event) {
    if (!dropdownUsers.contains(event.target) && !dropdownBtn.contains(event.target)) {
        dropdownUsers.classList.remove('show');
    }
});


// loader
var loader = function () {
    setTimeout(function () {
        if ($('#ftco-loader').length > 0) {
            $('#ftco-loader').removeClass('show');
        }
    }, 1500);
};
loader();