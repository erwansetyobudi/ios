<!--
# ===============================
# Ios Like Theme SLiMS
# ===============================
# @Author: Erwan Setyo Budi
# @Email:  erwans818@gmail.com
# @Date:   2025-04-06T11:25:57+07:00
# @Last modified by:   Erwan Setyo Budi
# @Last modified time:  2025-04-06T11:25:57+07:00
-->

<body class="controller-search action-home ">

    <?php
    // ------------------------------------------------------------------------
    // include navbar
    // ------------------------------------------------------------------------
    include '_navbar.php'; ?>
    </header>



    <div role="main" class="main template-dir-search template-name-home">
        <div id="content">

            <style>
                .autocomplete-results {
                    position: absolute;
                    /*display: none; */
                    border-radius: 5px;
                    margin: 5px;
                    padding: 10px;
                    box-sizing: border-box;
                    background-color: white;
                    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
                        0 2px 4px -1px rgba(0, 0, 0, 0.06);
                    overflow: hidden;
                    z-index: 10;
                }

                .autocomplete-results.open {
                    display: table;
                }

                .autocomplete-results.hidden {
                    display: none !important;
                }
            </style>
            <section class="search">
                <!-- Search Form -->
                <?php  
                include '_search-form.php';
                include '_info.php';
                include '_topic.php';
                include '_mitra.php'; 
                ?>
            </section>
            <?php include '_beranda.php';?>
            <?php include '_register.php';?>
            <?php include '_news.php';?>
            

            <script type="text/javascript">
                $(function () {
                    $('[data-toggle="tooltip"]').tooltip()
                })
                // $(".searchForm_lookfor:visible").focus()
            </script>
        </div>
    </div>