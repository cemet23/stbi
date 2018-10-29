<?php
                        $page = isset($_GET['page'])? $_GET['page'] : null;
                            
                        if($page == 'upload') {
                            include "upload.php";
                        } elseif ($page == 'query') {
                            include "query.php";
                        } elseif ($page == 'tokenisasi') {
                            include "tokenisasi.php";
                        } elseif ($page == 'dokumen') {
                            include "dokumen.php";
                        } elseif ($page == 'hasilupload') {
                            include "hasil_upload.php";
                        } elseif ($page == 'hasilquery') {
                            include "hasilquery.php";
                        } elseif ($page == 'hitungbobot') {
                            include "hitungbobot.php";
                        } elseif ($page == 'hitungvektor') {
                            include "hitungvektor.php";
                        } elseif ($page == 'awalquery') {
                            include "awalquery.php";
                        } elseif ($page == 'querytf2') {
                            include "querytf2.php";
                        } else {
                            include "home.php";
                        }

                        
?>