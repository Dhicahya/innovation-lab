<!-- Vendor JS Files -->
<script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="/assets/vendor/aos/aos.js"></script>
<script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/assets/vendor/php-email-form/validate.js"></script>

<!-- Bootstrap core JavaScript-->
<script src="/vendor/jquery/jquery.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/js/sb-admin-2.min.js"></script>

<!-- Template Main JS File -->
<script src="/assets/js/main.js"></script>

<!-- Bootstrap JS dan Popper.js -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

<!-- Font Awesome JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js">
</script>

<!-- menyembunyikan komentar -->
<script>
    $(document).ready(function() {
        $(".comment-btn").click(function() {
            var commentFormId = $(this).data('target');
            var commentList = $(commentFormId).next('.card').find('.comment-list');

            // Toggle visibility of the comment list
            $(commentList).toggle('slow');

            // Tambahkan kode untuk menampilkan komentar di sini
            // Misalnya, dengan menggunakan $(commentList).append('<li>Komentar baru</li>');

        });
    });
</script>

<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

<script>
    const togglePassword = document
        .querySelector('#togglePassword');
    const password = document.querySelector('#password');

    try {
        togglePassword.addEventListener('click', () => {
            // Toggle the type attribute using
            // getAttribure() method
            const type = password
                .getAttribute('type') === 'password' ?
                'text' : 'password';
            password.setAttribute('type', type);
            // Toggle the eye and bi-eye icon
            // this.classList.toggle('fas fa-eye');
        });
    } catch (error) {

    }
</script>

<script>
    const togglePasswordConfirm = document
        .querySelector('#togglePasswordConfirm');
    const passwordConfirm = document.querySelector('#password-confirm');
    // togglePasswordConfirm.addEventListener('click', () => {
    //     // Toggle the type attribute using
    //     // getAttribure() method
    //     const type = passwordConfirm
    //         .getAttribute('type') === 'password' ?
    //         'text' : 'password';
    //     passwordConfirm.setAttribute('type', type);
    //     // Toggle the eye and bi-eye icon
    //     this.classList.toggle('bi-eye');
    // });
</script>

<script>
    $(document).ready(function() {
        $('.dropdown-toggle').dropdown();
    });
</script>

<script>
    $('#selectCategoryThread').on({
        "focus": function() {
            console.log('clicked!', this, this.value);
            this.selectedIndex = -1;
        },
        "change": function() {
            choice = $(this).val();
            console.log('changed!', this, choice);
            this.blur();
            setTimeout(function() {
                window.location.href = '{{ route('forum') }}?category_id=' + choice
            }, 0);
        }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(".js-example-tags").select2({
        tags: true,
        theme: "bootstrap"
    });
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            toolbar: [
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']]
            ]
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
