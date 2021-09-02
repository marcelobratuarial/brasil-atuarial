<!doctype html>
<html class="no-js" lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Brasil Atuarial | Gerenciar Blog </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url("assets/img/favicon.ico") ?>">

	<!-- CSS here -->
	<link rel="stylesheet" href="<?= base_url("assets/css/bootstrap.min.css") ?>">
	<link rel="stylesheet" href="<?= base_url("assets/css/owl.carousel.min.css") ?>">
	<link rel="stylesheet" href="<?= base_url("assets/css/slicknav.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/flaticon.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/gijgo.css") ?>">
	<link rel="stylesheet" href="<?= base_url("assets/css/animate.min.css") ?>">
	<link rel="stylesheet" href="<?= base_url("assets/css/magnific-popup.css") ?>">
	<link rel="stylesheet" href="<?= base_url("assets/css/fontawesome-all.min.css") ?>">
	<link rel="stylesheet" href="<?= base_url("assets/css/themify-icons.css") ?>">
	<link rel="stylesheet" href="<?= base_url("assets/css/slick.css") ?>">
	<link rel="stylesheet" href="<?= base_url("assets/css/nice-select.css") ?>">
	<link rel="stylesheet" href="<?= base_url("assets/css/style.css") ?>">
	<link rel="stylesheet" href="<?= base_url("assets/summernote/summernote-bs4.min.css") ?>">
    <!-- Include stylesheet -->
    <!-- <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet"> -->
    <style>
        .regs tr.destaca {
            background-color: rgb(31 80 141 / 69%) !important;
            transition: all 1s ease
        }
        .regs tr {
            transition: all 1s ease
        }
        a.publish-post {
            border: solid 1px #168830;
            border-radius: 30px;
            background-color: #28a745;
            display: inline-block;
            padding: 4px 6px;
            color: #fff !important;
            height: 34px;
            /* width: 34px; */
            cursor: pointer
        }
        a.edit-cat {
            /* border: solid 1px red; */
            border-radius: 50%;
            background-color: #ffc107;
            display: inline-block;
            padding: 8px;
            height: 34px;
            width: 34px;
            cursor: pointer
        }
        .new-post {
            color: #fff !important;
        }
        .category-box {
            overflow-y: hidden;
            height: 50px;
            transition: height 1s ease;
        }
        .category-box:hover {
            overflow-y: scroll;
            height: 150px;
            transition: height 1s ease;
        }
        #imgPreview {
            border-radius: 20px 20px 0 0;
        }
        .remove-image {
            border: solid 1px red;
            border-radius: 50%;
            height: 30px;
            width: 30px;
            background-color: #ff6b6b;
            position: absolute;
            top: 6px;
            right: 6px;
        }
        
    </style>
</head>
<body>

    <?= $this->renderSection('header') ?>
    
    <main>
        <?= $this->renderSection('content') ?>
    
        
        
        <!--? Popular Course Start 
        <div class="popular-course section-padding30">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                  
                        <div class="section-tittle text-center mb-70">
                            <span>Most Popular Course Of This Week</span>
                            <h2>Our Popular Course</h2>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                    
                        <div class="single-course mb-40">
                            <div class="course-img">
                                <img src="assets/img/gallery/popular_sub1.png" alt="">
                            </div>
                            <div class="course-caption">
                                <div class="course-cap-top">
                                    <h4><a href="#">Graphic Design</a></h4>
                                </div>
                                <div class="course-cap-mid d-flex justify-content-between">
                                    <div class="course-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <ul><li>52 Review</li></ul>
                                </div>
                                <div class="course-cap-bottom d-flex justify-content-between">
                                    <ul>
                                        <li><i class="ti-user"></i> 562</li>
                                        <li><i class="ti-heart"></i> 562</li>
                                    </ul>
                                    <span>Free</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
       
                        <div class="single-course mb-40">
                            <div class="course-img">
                                <img src="assets/img/gallery/popular_sub2.png" alt="">
                            </div>
                            <div class="course-caption">
                                <div class="course-cap-top">
                                    <h4><a href="#">Web Development</a></h4>
                                </div>
                                <div class="course-cap-mid d-flex justify-content-between">
                                    <div class="course-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <ul><li>52 Review</li></ul>
                                </div>
                                <div class="course-cap-bottom d-flex justify-content-between">
                                    <ul>
                                        <li><i class="ti-user"></i> 562</li>
                                        <li><i class="ti-heart"></i> 562</li>
                                    </ul>
                                    <span>Free</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
               
                        <div class="single-course mb-40">
                            <div class="course-img">
                                <img src="assets/img/gallery/popular_sub3.png" alt="">
                            </div>
                            <div class="course-caption">
                                <div class="course-cap-top">
                                    <h4><a href="#">Digital Marketing</a></h4>
                                </div>
                                <div class="course-cap-mid d-flex justify-content-between">
                                    <div class="course-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <ul><li>52 Review</li></ul>
                                </div>
                                <div class="course-cap-bottom d-flex justify-content-between">
                                    <ul>
                                        <li><i class="ti-user"></i> 562</li>
                                        <li><i class="ti-heart"></i> 562</li>
                                    </ul>
                                    <span>Free</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
         
                <div class="row">
                    <div class="col-lg-12">
                        <div class="browse-btn2 text-center mt-50">
                            <a href="courses.html" class="btn">Find More Courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popular Course End -->
        
        
    </main>

    
    <?= $this->renderSection('footer') ?>

    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
    <script src="<?= base_url("./assets/js/vendor/modernizr-3.5.0.min.js") ?>"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?= base_url("./assets/js/vendor/jquery-1.12.4.min.js") ?>"></script>
    <script src="<?= base_url("./assets/js/popper.min.js") ?>"></script>
    <script src="<?= base_url("./assets/js/bootstrap.min.js") ?>"></script>
    <!-- Jquery Mobile Menu -->
    <script src="<?= base_url("./assets/js/jquery.slicknav.min.js") ?>"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="<?= base_url("./assets/js/owl.carousel.min.js") ?>"></script>
    <script src="<?= base_url("./assets/js/slick.min.js") ?>"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="<?= base_url("./assets/js/wow.min.js") ?>"></script>
    <script src="<?= base_url("./assets/js/animated.headline.js") ?>"></script>
    <script src="<?= base_url("./assets/js/jquery.magnific-popup.js") ?>"></script>

    <!-- Date Picker -->
    <script src="<?= base_url("./assets/js/gijgo.min.js") ?>"></script>
    <!-- Nice-select, sticky -->
    <script src="<?= base_url("./assets/js/jquery.nice-select.min.js") ?>"></script>
    <script src="<?= base_url("./assets/js/jquery.sticky.js") ?>"></script>
    <!-- contact js -->
    <script src="<?= base_url("./assets/js/jquery.form.js") ?>"></script>
    <script src="<?= base_url("./assets/js/jquery.validate.min.js") ?>"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="<?= base_url("./assets/js/plugins.js") ?>"></script>
    <script src="<?= base_url("./assets/js/main.js") ?>"></script>
    <script src="<?= base_url("./assets/summernote/summernote-bs4.min.js") ?>"></script>
    <script src="<?= base_url("./assets/summernote/lang/summernote-pt-BR.js") ?>"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script> -->
    <!-- Include the Quill library -->
    <!-- <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script> -->
    <script>
        
        $(document).ready(function() {
            $(".custom-control-input").on("change", function (e) {
                console.log($(this).data("id"))
                // console.log(.text())
                var url = '<?= base_url('/dash/post/publish') ?>';
                var lb = $(this).parent('div').find(".custom-control-label")
                $.ajax({
                    type: "POST",
                    url: url,
                    data: { post: $(this).data("id") },
                    // fail: errPost,
                    success: function (response) {
                        console.log(response)
                        lb.text(response)
                        // $(".custom-control-label").text(text);
                        // $('#imgPreview').attr('src', '');
                        // $('#imgPreview').slideUp(200);
                        // $(".remove-image").slideUp(100);
                        // $('#noImageBox').slideDown(250);
                        // $("#upload-box").slideDown(500);
                    },
                    dataType: 'json',
                    // headers: {'X-Requested-With': 'XMLHttpRequest'}
                });
                if ($(this).is(":checked") ) {
                    // console
                }
            })
            var themes = {
                "default": "//netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css",
                "cerulean" : "//bootswatch.com/4/cerulean/bootstrap.css",
                "cosmo" : "//bootswatch.com/4/cosmo/bootstrap.css",
                "cyborg" : "//bootswatch.com/4/cyborg/bootstrap.css",
                "darkly" : "//bootswatch.com/4/darkly/bootstrap.css",
                "flatly" : "//bootswatch.com/4/flatly/bootstrap.css",
                "lumen" : "//bootswatch.com/4/lumen/bootstrap.css",
                "paper" : "//bootswatch.com/4/paper/bootstrap.css",
                "journal" : "//bootswatch.com/4/journal/bootstrap.css",
                "readable" : "//bootswatch.com/4/readable/bootstrap.css",
                "sandstone" : "//bootswatch.com/4/sandstone/bootstrap.css",
                "simplex" : "//bootswatch.com/4/simplex/bootstrap.css",
                "slate" : "//bootswatch.com/4/slate/bootstrap.css",
                "spacelab" : "//bootswatch.com/4/spacelab/bootstrap.css",
                "superhero" : "//bootswatch.com/4/superhero/bootstrap.css",
                "united" : "//bootswatch.com/4/united/bootstrap.css",
                "yeti" : "//bootswatch.com/4/yeti/bootstrap.css",
            }
            var $themesheet = $('<link href="'+themes['lumen']+'" rel="stylesheet" />')
            $themesheet.appendTo('head');
            // var options = $.map(themes, function (url, theme) {
            // return '<option value="' + theme + '">' + theme + '</option>';
            // }).join('');
            // $('#select').html(options).on('change', function(){
            // $themesheet.attr('href', themes[$(this).val()]);
            // });
            $('#summernote').summernote({
                placeholder: 'Escreva algo maravilhoso...',
                // tabsize: 2,
                spellCheck: true,
                disableGrammar: false,
                callbacks: {
                    onImageUpload: function(files, editor, welEditable) {
                        var url = '<?= base_url('/dash/post/fileupload') ?>';
                        console.log(files)
                        var formData = new FormData()
                        formData.append('file', files[0]);
                        var ed = editor
                        $.ajax({
                            type: "POST",
                            enctype: 'multipart/form-data',
                            processData: false,
                            contentType: false,
                            cache: false,
                            url: url,
                            data: formData,
                            fail: function (e) {

                            },
                            success: (r) => {
                                var file = JSON.parse(r)
                                // console.log(file)
                                $('#summernote').summernote('insertImage', file.url);
                            }
                            // headers: {'X-Requested-With': 'XMLHttpRequest'}
                        });
                        // upload image to server and create imgNode...
                        // $summernote.summernote('insertNode', imgNode);
                    }
                },
                height: 300,
                tooltip: false,
                lang: 'pt-BR'
                // toolbar: [
                //     // [groupName, [list of button]]
                //     ['style', ['bold', 'italic', 'underline', 'clear']],
                //     ['font', ['strikethrough', 'superscript', 'subscript']],
                //     ['fontsize', ['fontsize']],
                //     ['color', ['color']],
                //     ['para', ['ul', 'ol', 'paragraph']],
                //     ['misc', ['undo', 'redo']],
                // ]
            });
            // $(".note-btn.btn").tooltip("disable");
            // $('.note-btn.btn').tooltip({ 'placement': 'right' });
            // $(".note-btn.btn").tooltip("enable");
            if($("#summernote").length > 0) {
                // $custom-file-text: (
                //     en: "Browse",
                //     br: "Procurar"
                // );
                $("#imagem-destacada").on("change", function (e) {
                    const file = e.target.files[0]; 
                    const url = URL.createObjectURL(file);
                    $('#imgPreview').attr('src', url);
                    $('#imgPreview').slideDown(300);
                    $('#noImageBox').slideUp(250);
                    // $("#upload-box").slideUp('500');
                    // $("#delete-destacada").slideDown('500');
                })
                $(".remove-image").on("click", function (e) {
                    // const file = e.target.files[0]; 
                    // const url = URL.createObjectURL(file);
                    var url = '<?= base_url('/dash/post/delete-image') ?>';
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: { post: $("#post-id").val() },
                        // fail: errPost,
                        success: function (response) {
                            console.log(response)
                            $('#imgPreview').attr('src', '');
                            $('#imgPreview').slideUp(200);
                            $(".remove-image").slideUp(100);
                            $('#noImageBox').slideDown(250);
                            $("#upload-box").slideDown(500);
                        },
                        dataType: 'json',
                        // headers: {'X-Requested-With': 'XMLHttpRequest'}
                    });

                    
                    // $("#delete-destacada").slideDown('500');
                })
                
                $(".save-post").on("click", function() {
                    // var text = quill.getContents();
                    // var about = document.querySelector('input[name=about]');
                    // about.value = JSON.stringify(quill.getContents());

                    // console.log("text", text)
                    // console.log("stringfy", JSON.stringify(quill.getContents()))
                    // var ops = JSON.stringify(quill.getContents())
                    // var ops = JSON.parse(ss);
                    // quill.setContents(ops, 'api');
                    // console.log("ops", ops)
                    
                    var formData = new FormData()
                    var url = '<?= base_url('/dash/post/save') ?>';
                    // var cats = []

                    // console.log(typeof cats)
                    
                    // console.log(typeof cats)
                    // console.log(cats)
                    // console.warn("Todos => ", cats)
                    // console.warn("Cats => ", $(b).text())
                    // var data = new FormData()
                    // formData.set(name, value);
                
                    // var data = {
                    //     categorias: cats,
                    //     post_title: $('#post-title').val(),
                    //     post_content: $('#summernote').summernote('code')
                    // } 
                    $.each($(".categorias input:checked"), function(a,b) {
                        // console.log("Selecionado => ",$(b).val())
                        // cats.push($(b).val())
                        formData.append('categorias[]', $(b).val())
                    })
                    
                    if($("#post-id").val().length > 0) {
                        formData.append('pid', $("#post-id").val())
                    }

                    formData.append('image', $("#imagem-destacada")[0].files[0]);
                    // formData.set('categorias', cats);
                    formData.append('post_title', $('#post-title').val());
                    formData.append('post_content', $('#summernote').summernote('code'));


                    var successPost = function (a, b) {
                        console.log(a)
                        console.log(b)
                        if(a.edit) {
                            // $('#imgPreview').attr('src', '');
                            // $('#imgPreview').slideUp(200);
                            // $(".remove-image").slideUp(100);
                            // $('#noImageBox').slideDown(250);
                            // $("#upload-box").slideDown(500);
                        } else {
                            $("#post-id").val(a.reg[0].id)
                            $('#messageModal').modal("show")
                        }
                        if(a.image) {
                            $("#imagem-destacada").val('');
                            // $('#imgPreview').attr('src', '');
                            // $('#imgPreview').slideUp(200);
                            $(".remove-image").slideDown(100);
                            $('#noImageBox').slideUp(250);
                            $("#upload-box").slideUp(500);
                        }
                        
                        // $('#exampleModal').modal("hide")
                        // setTimeout(() => {
                            
                        //     $(".regs").find("#cat-"+a.reg[0].id).removeClass("destaca")
                        // }, 500);
                    }
                    var errPost = function (a,b) {
                        console.log(a)
                        console.log(b)
                        return alert("ERR")
                    }
                    var dataType = 'json'
                    $.ajax({
                        type: "POST",
                        enctype: 'multipart/form-data',
                        processData: false,
                        contentType: false,
                        cache: false,
                        url: url,
                        data: formData,
                        fail: errPost,
                        success: successPost,
                        dataType: dataType,
                        // headers: {'X-Requested-With': 'XMLHttpRequest'}
                    });
                });
                // quill.on('text-change', function(delta, oldDelta, source) {
                // if (source == 'api') {
                //     console.log("An API call triggered this change.");
                // } else if (source == 'user') {
                //     console.log("A user action triggered this change.");
                // }
                // });
            } else {
                console.log("Sem editor")
            }
            
            

            $(".new-cat").on("click", function() {
                console.log("dasfas "+$(this).data("cid"))
                $("#exampleModal").find(".modal-title").text("Nova categoria")
                $("#category-name").val("")
            })
            $(".regs").on("click", ".edit-cat", function(e) {
                console.log($(this).data("cid"))
                console.warn($(this).closest("tr"))
                if($(this).data("cid")) {
                    console.log("if")
                    $("#exampleModal").find(".modal-title").text("Editar categoria")
                    console.warn($(this).closest("tr").find(".cat-name").text())
                    $("#category-name").val($(this).closest("tr").find(".cat-name").text())
                    $("#category-id").val($(this).data("cid"))
                } else {
                    console.log("else")
                    
                }
            })
            $(".save-cat").on("click", function() {
                var url = '<?= base_url('/dash/cat/save') ?>';
                
                var data = {
                    category: $("#category-name").val()
                } 
                if($("#category-id").val() > 0) {
                    console.warn("Edit")
                    data['cid'] = $("#category-id").val()
                } else {
                    console.warn("Novo")
                }
                var success = function (a, b) {
                    console.log(a)
                    console.log(b)
                    
                    if(a.edit) {
                        $(".regs").find("#cat-"+a.reg[0].id + " .cat-name").text(a.reg[0].category)
                        $(".regs").find("#cat-"+a.reg[0].id).addClass("destaca")
                    } else {
                        var prep = ""
                        prep += '<tr id="cat-'+a.reg[0].id+'" class="destaca">'
                        // prep += '<!-- <th scope="row"><?php //$k+1 ?></th> -->'
                        prep += '<td class="cat-name">'+a.reg[0].category+'</td>'
                        prep += '<td>0</td>'
                        prep += '<td><a class="edit-cat" data-toggle="modal" data-cid="'+a.reg[0].id+'" data-target="#exampleModal"><i class="ti-pencil-alt"> </i></a></td>'
                        prep += '</tr>'
                        $(".regs").prepend(prep)
                        
                    }
                    $('#exampleModal').modal("hide")
                    setTimeout(() => {
                        
                        $(".regs").find("#cat-"+a.reg[0].id).removeClass("destaca")
                    }, 500);
                }
                var err = function (a,b) {
                    console.log(a)
                    console.log(b)
                    return alert("ERR")
                }
                var dataType = 'json'
                $.ajax({
                    type: "POST",
                    url: url,
                    data: data,
                    fail: err,
                    success: success,
                    dataType: dataType,
                    // headers: {'X-Requested-With': 'XMLHttpRequest'}
                });
            });
            $('#exampleModal').on('show.bs.modal', function (e) {
                // alert("Carregado")
            })
            $('#exampleModal').on('hidden.bs.modal', function (e) {
                $("#category-id").val("")
            })
        });
    </script>





    </body>
</html>