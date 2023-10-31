<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Admin | PPID UHO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Dashboard PPID Universitas Halu Oleo" />
    <meta name="keywords" content="ppid">
    <meta name="author" content="PPID UHO" />

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('admin-assets/assets/css/style.css') }}">

    {{-- tiny editor cdn --}}
    {{-- <script src="https://cdn.tiny.cloud/1/gpbwgwsn7c6j08npcqbznlniosdnau8smuipab8mhzhy2x9u/tinymce/6/tinymce.min.js"
    referrerpolicy="origin"></script> --}}
    <script src="https://cdn.tiny.cloud/1/qev5oncccs1ihrtk5ovj96mdhfhf0hq1t50jyy476q78f2kd/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>

    {{-- jquery cdn --}}
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    {{-- ckeditor 5 --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

    <style>
        .fixed-button {
            display: none;
        }

        .pembungkus {
            max-width: 100%;
            overflow: hidden;
            position: relative;
            padding-bottom: 62.5%;
            border-radius: 10px;
            border: 1.5px solid #bcbcbc;
        }

        .pembungkus-img {
            width: 25%;
        }

        .responsive-element {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-position: center;
            background-size: cover;
            cursor: pointer;
            transition: all 0.4s ease;
        }

        @media (max-width: 576px) {
            .pembungkus-img {
                width: 100%;
            }
        }
    </style>
</head>

<body class="">

    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->


    @include('components.sidebar')
    @include('components.header')

    @yield('content')

    <!-- Required Js -->
    <script src="{{ asset('admin-assets/assets/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('admin-assets/assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin-assets/assets/js/pcoded.min.js') }}"></script>

    <!-- Apex Chart -->
    <script src="{{ asset('admin-assets/assets/js/plugins/apexcharts.min.js') }}"></script>

    {{-- CKEDITOR --}}
    <script>
        ClassicEditor.create(document.querySelector('#editor'), {
                toolbar: ['heading', '|', 'undo', 'redo', '|', 'bold',
                    'italic', 'link', '|', 'outdent', 'indent', '|',
                    'bulletedList',
                    'numberedList'
                ],

                heading: {
                    options: [{
                            model: 'paragraph',
                            title: 'Paragraph',
                            class: 'ck-heading_paragraph'
                        },
                        {
                            model: 'heading1',
                            view: 'h1',
                            title: 'Heading 1',
                            class: 'ck-heading_heading1'
                        },
                        {
                            model: 'heading2',
                            view: 'h2',
                            title: 'Heading 2',
                            class: 'ck-heading_heading2'
                        },
                        {
                            model: 'heading3',
                            view: 'h3',
                            title: 'Heading 3',
                            class: 'ck-heading_heading3'
                        },
                        {
                            model: 'heading4',
                            view: 'h4',
                            title: 'Heading 4',
                            class: 'ck-heading_heading4'
                        },
                        {
                            model: 'heading5',
                            view: 'h5',
                            title: 'Heading 5',
                            class: 'ck-heading_heading5'
                        },
                        {
                            model: 'heading6',
                            view: 'h6',
                            title: 'Heading 6',
                            class: 'ck-heading_heading6'
                        }
                    ]
                },

                link: {
                    decorators: {
                        openInNewTab: {
                            mode: 'manual',
                            label: 'Open in a new tab',
                            defaultValue: true, // This option will be selected by default.
                            attributes: {
                                target: '_blank',
                                rel: 'noopener noreferrer'
                            }
                        }
                    }
                }
            })
            .catch(error => {
                console.log(error);
            });

        ClassicEditor.create(document.querySelector('#editor1'), {
                toolbar: ['heading', '|', 'undo', 'redo', '|', 'bold',
                    'italic', 'link', '|', 'outdent', 'indent', '|',
                    'bulletedList',
                    'numberedList'
                ],

                heading: {
                    options: [{
                            model: 'paragraph',
                            title: 'Paragraph',
                            class: 'ck-heading_paragraph'
                        },
                        {
                            model: 'heading1',
                            view: 'h1',
                            title: 'Heading 1',
                            class: 'ck-heading_heading1'
                        },
                        {
                            model: 'heading2',
                            view: 'h2',
                            title: 'Heading 2',
                            class: 'ck-heading_heading2'
                        },
                        {
                            model: 'heading3',
                            view: 'h3',
                            title: 'Heading 3',
                            class: 'ck-heading_heading3'
                        },
                        {
                            model: 'heading4',
                            view: 'h4',
                            title: 'Heading 4',
                            class: 'ck-heading_heading4'
                        },
                        {
                            model: 'heading5',
                            view: 'h5',
                            title: 'Heading 5',
                            class: 'ck-heading_heading5'
                        },
                        {
                            model: 'heading6',
                            view: 'h6',
                            title: 'Heading 6',
                            class: 'ck-heading_heading6'
                        }
                    ]
                },

                link: {
                    decorators: {
                        openInNewTab: {
                            mode: 'manual',
                            label: 'Open in a new tab',
                            defaultValue: true, // This option will be selected by default.
                            attributes: {
                                target: '_blank',
                                rel: 'noopener noreferrer'
                            }
                        }
                    }
                }
            })
            .catch(error => {
                console.log(error);
            });

        ClassicEditor.create(document.querySelector('#editor2'), {
                toolbar: ['heading', '|', 'undo', 'redo', '|', 'bold',
                    'italic', 'link', '|', 'outdent', 'indent', '|',
                    'bulletedList',
                    'numberedList'
                ],

                heading: {
                    options: [{
                            model: 'paragraph',
                            title: 'Paragraph',
                            class: 'ck-heading_paragraph'
                        },
                        {
                            model: 'heading1',
                            view: 'h1',
                            title: 'Heading 1',
                            class: 'ck-heading_heading1'
                        },
                        {
                            model: 'heading2',
                            view: 'h2',
                            title: 'Heading 2',
                            class: 'ck-heading_heading2'
                        },
                        {
                            model: 'heading3',
                            view: 'h3',
                            title: 'Heading 3',
                            class: 'ck-heading_heading3'
                        },
                        {
                            model: 'heading4',
                            view: 'h4',
                            title: 'Heading 4',
                            class: 'ck-heading_heading4'
                        },
                        {
                            model: 'heading5',
                            view: 'h5',
                            title: 'Heading 5',
                            class: 'ck-heading_heading5'
                        },
                        {
                            model: 'heading6',
                            view: 'h6',
                            title: 'Heading 6',
                            class: 'ck-heading_heading6'
                        }
                    ]
                },

                link: {
                    decorators: {
                        openInNewTab: {
                            mode: 'manual',
                            label: 'Open in a new tab',
                            defaultValue: true, // This option will be selected by default.
                            attributes: {
                                target: '_blank',
                                rel: 'noopener noreferrer'
                            }
                        }
                    }
                }
            })
            .catch(error => {
                console.log(error);
            });

        ClassicEditor.create(document.querySelector('#editor4'), {
                toolbar: ['heading', '|', 'undo', 'redo', '|', 'bold',
                    'italic', 'link', '|', 'outdent', 'indent', '|',
                    'bulletedList',
                    'numberedList'
                ],

                heading: {
                    options: [{
                            model: 'paragraph',
                            title: 'Paragraph',
                            class: 'ck-heading_paragraph'
                        },
                        {
                            model: 'heading1',
                            view: 'h1',
                            title: 'Heading 1',
                            class: 'ck-heading_heading1'
                        },
                        {
                            model: 'heading2',
                            view: 'h2',
                            title: 'Heading 2',
                            class: 'ck-heading_heading2'
                        },
                        {
                            model: 'heading3',
                            view: 'h3',
                            title: 'Heading 3',
                            class: 'ck-heading_heading3'
                        },
                        {
                            model: 'heading4',
                            view: 'h4',
                            title: 'Heading 4',
                            class: 'ck-heading_heading4'
                        },
                        {
                            model: 'heading5',
                            view: 'h5',
                            title: 'Heading 5',
                            class: 'ck-heading_heading5'
                        },
                        {
                            model: 'heading6',
                            view: 'h6',
                            title: 'Heading 6',
                            class: 'ck-heading_heading6'
                        }
                    ]
                },

                link: {
                    decorators: {
                        openInNewTab: {
                            mode: 'manual',
                            label: 'Open in a new tab',
                            defaultValue: true, // This option will be selected by default.
                            attributes: {
                                target: '_blank',
                                rel: 'noopener noreferrer'
                            }
                        }
                    }
                }
            })
            .catch(error => {
                console.log(error);
            });

        ClassicEditor.create(document.querySelector('#editor5'), {
                toolbar: ['heading', '|', 'undo', 'redo', '|', 'bold',
                    'italic', 'link', '|', 'outdent', 'indent', '|',
                    'bulletedList',
                    'numberedList'
                ],

                heading: {
                    options: [{
                            model: 'paragraph',
                            title: 'Paragraph',
                            class: 'ck-heading_paragraph'
                        },
                        {
                            model: 'heading1',
                            view: 'h1',
                            title: 'Heading 1',
                            class: 'ck-heading_heading1'
                        },
                        {
                            model: 'heading2',
                            view: 'h2',
                            title: 'Heading 2',
                            class: 'ck-heading_heading2'
                        },
                        {
                            model: 'heading3',
                            view: 'h3',
                            title: 'Heading 3',
                            class: 'ck-heading_heading3'
                        },
                        {
                            model: 'heading4',
                            view: 'h4',
                            title: 'Heading 4',
                            class: 'ck-heading_heading4'
                        },
                        {
                            model: 'heading5',
                            view: 'h5',
                            title: 'Heading 5',
                            class: 'ck-heading_heading5'
                        },
                        {
                            model: 'heading6',
                            view: 'h6',
                            title: 'Heading 6',
                            class: 'ck-heading_heading6'
                        }
                    ]
                },

                link: {
                    decorators: {
                        openInNewTab: {
                            mode: 'manual',
                            label: 'Open in a new tab',
                            defaultValue: true, // This option will be selected by default.
                            attributes: {
                                target: '_blank',
                                rel: 'noopener noreferrer'
                            }
                        }
                    }
                }
            })
            .catch(error => {
                console.log(error);
            });

        // jquery
        $(document).ready(function() {
            // Hapus class tertentu
            setTimeout(() => {
                $('.alert').fadeOut();
            }, 4000);
        });
    </script>

</body>

</html>
