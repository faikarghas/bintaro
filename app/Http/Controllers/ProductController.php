<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        $news = DB::table('news')->where('news_lang','1')->orderBy('news_id','DESC')->limit(8)->get();

        $data = [
            'news' => $news
        ];

        return view('web.product.index',$data);
    }

    public function category(){
        $news = DB::table('news')->where('news_lang','1')->orderBy('news_id','DESC')->limit(8)->get();

        $data = [
            'news' => $news
        ];

        return view('web.product.category',$data);
    }

    public function detail($category,$slug){
        $news = DB::table('news')->where('news_lang','1')->orderBy('news_id','DESC')->limit(8)->get();
        $detailProduct;

        if ($slug == 'kebayoran-residences') {
            $detailProduct = array(
                'slug' => 'kebayoran-residences',
                'title' => 'Kebayoran Residences',
                'banner' => 'banner-kebayoran.jpg',
                'sliderName' => 'FIND YOUR CLUSTER',
                'cluster' => array(
                    [
                        'title' => 'Kebayoran Piazza',
                        'image' => 'piazza.jpg',
                        'tab' => 'piazza',
                        'image1' => 'kebayoran1.jpg',
                        'image2' => 'kebayoran2.jpg',
                        'image3' => 'kebayoran3.jpg',
                        'image4' => 'kebayoran4.jpg',
                        'title1' => 'Piazza (New Design)',
                        'desc1' => 'Kebayoran Piazza didesain oleh Osamu Nishida, Arsitek jepang Pemenang Penghargaan International, dengan gaya Modern Eksklusif.',
                        'desc2' => 'Kini, Bintaro Jaya Kembali mempersembahkan hunian tipe baru dengan desain mewah yang menyesuaikan dengan karakteristik dan kebutuhan Anda yaitu FERNNA, PINNATA dan AZZOLA.',
                        'desc3' => 'Elegan, mewah, luas, pilihannya ada di tangan Anda.',
                        'titleBrosur' => 'New Piazza',
                        'titleBrosur2' => 'Pinnata',
                        'tabName' =>'',
                        'descBrosur' => '3+1 Bedrooms<br>3 Bathrooms<br>1 Carport',
                        'downloadBrosur' => '',
                        'imageBrosur' => array(
                            [
                                'image' => 'kebayoran5.jpg'
                            ],
                        )
                    ],
                    [
                        'title' => 'Kebayoran Harmony',
                        'image' => 'harmony.jpg',
                        'tab' => 'harmony',
                        'image1' => '',
                        'image2' => '',
                        'image3' => '',
                        'image4' => '',
                        'title1' => '',
                        'desc1' => '',
                        'desc2' => '',
                        'desc3' => '',
                        'titleBrosur' => '',
                        'titleBrosur2' => '',
                        'tabName' =>'',
                        'descBrosur' => '',
                        'downloadBrosur' => '',
                        'imageBrosur' => array(
                            [
                                'image' => ''
                            ],
                        )
                    ],
                    [
                        'title' => 'Kebayoran Infinity',
                        'image' => 'infinity.jpg',
                        'tab' => 'infinity',
                        'image1' => '',
                        'image2' => '',
                        'image3' => '',
                        'image4' => '',
                        'title1' => '',
                        'desc1' => '',
                        'desc2' => '',
                        'desc3' => '',
                        'titleBrosur' => '',
                        'titleBrosur2' => '',
                        'tabName' =>'',
                        'descBrosur' => '',
                        'downloadBrosur' => '',
                        'imageBrosur' => array(
                            [
                                'image' => ''
                            ],
                        )
                    ],
                    [
                        'title' => 'Kebayoran Garden',
                        'image' => 'garden.jpg',
                        'tab' => 'garden',
                        'image1' => '',
                        'image2' => '',
                        'image3' => '',
                        'image4' => '',
                        'title1' => '',
                        'desc1' => '',
                        'desc2' => '',
                        'desc3' => '',
                        'titleBrosur' => '',
                        'titleBrosur2' => '',
                        'tabName' =>'',
                        'descBrosur' => '',
                        'downloadBrosur' => '',
                        'imageBrosur' => array(
                            [
                                'image' => ''
                            ],
                        )
                    ],
                ),
                
            );
        } elseif ($slug == 'discovery-residences') {
            $detailProduct = array(
                'slug' => 'discovery-residences',
                'title' => 'Discovery Residences',
                'banner' => 'banner-discovery.jpg',
                'sliderName' => 'FIND YOUR CLUSTER',
                'cluster' => array(
                    [
                        'title' => 'Discovery Aluvia',
                        'image' => 'aluvia.jpg',
                        'tab' => 'aluvia',
                        'image1' => 'discovery1.jpg',
                        'image2' => 'discovery2.jpg',
                        'image3' => 'discovery3.jpg',
                        'image4' => 'discovery4.jpg',
                        'title1' => 'Discovery Aluvia',
                        'desc1' => 'Cluster premium terbaru di distrik Discovery Bintaro Jaya yang mengusung konsep desain hunian modern dan simple, sesuai dengan gaya hidup urban.',
                        'desc2' => 'Dilengkapi dengan akses masuk eksklusif dan lokasi yang mudah dijangkau dari mana saja.',
                        'desc3' => 'Rumah ideal dengan fasilitas penunjang dan akses transportasi terlengkap.',
                        'titleBrosur' => 'Discovery Aluvia',
                        'tabName' => '',
                        'titleBrosur2' => 'Vienta',
                        'descBrosur' => '4+1 Bedrooms<br>2 Bathrooms<br>1 Carport<br>1 Half Bathroom',
                        'downloadBrosur' => '',
                        'imageBrosur' => array(
                            [
                                'image' => 'discovery5.jpg'
                            ]
                        )
                    ],
                    [
                        'title' => 'Discovery Alteza',
                        'image' => 'alteza.jpg',
                        'tab' => 'alteza',
                        'image1' => '',
                        'image2' => '',
                        'image3' => '',
                        'image4' => '',
                        'title1' => '',
                        'desc1' => '',
                        'desc2' => '',
                        'desc3' => '',
                        'titleBrosur' => '',
                        'tabName' => '',
                        'titleBrosur2' => '',
                        'descBrosur' => '',
                        'downloadBrosur' => '',
                        'imageBrosur' => array(
                            [
                                'image' => ''
                            ],
                        )
                    ],
                    [
                        'title' => 'Discovery Amore',
                        'image' => 'amore.jpg',
                        'tab' => 'amore',
                        'image1' => '',
                        'image2' => '',
                        'image3' => '',
                        'image4' => '',
                        'title1' => '',
                        'desc1' => '',
                        'desc2' => '',
                        'desc3' => '',
                        'titleBrosur' => '',
                        'tabName' => '',
                        'titleBrosur2' => '',
                        'descBrosur' => '',
                        'downloadBrosur' => '',
                        'imageBrosur' => array(
                            [
                                'image' => ''
                            ],
                        )
                    ],
                    [
                        'title' => 'Discovery Eola',
                        'image' => 'eola.jpg',
                        'tab' => 'eola',
                        'image1' => '',
                        'image2' => '',
                        'image3' => '',
                        'image4' => '',
                        'title1' => '',
                        'desc1' => '',
                        'desc2' => '',
                        'desc3' => '',
                        'titleBrosur' => '',
                        'tabName' => '',
                        'titleBrosur2' => '',
                        'descBrosur' => '',
                        'downloadBrosur' => '',
                        'imageBrosur' => array(
                            [
                                'image' => ''
                            ],
                        )
                    ],
                ),
                
            );
        } elseif ($slug == 'kebayoran-arcade-5') {
            $detailProduct = array(
                'slug' => 'discovery-residences',
                'title' => 'KEBAYORAN ARCADE 5',
                'banner' => 'Banner2-commercial.jpg',
                'sliderName' => 'FIND YOUR COMMERCIAL AREA',
                'cluster' => array(
                    [
                        'title' => 'Kebayoran Square',
                        'image' => 'commercial1.jpg',
                        'tab' => 'aluvia',
                        'image1' => 'commercial3.jpg',
                        'image2' => 'commercial4.jpg',
                        'image3' => 'commercial5.jpg',
                        'image4' => '',
                        'title1' => 'Ruko Kebayoran Arcade 5',
                        'desc1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ',
                        'desc2' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ',
                        'desc3' => '',
                        'titleBrosur' => 'Kebayoran Arcade 5',
                        'titleBrosur2' => '',
                        'descBrosur' => '3 Floors<br>3 Bathrooms<br>1 Elevator',
                        'downloadBrosur' => '',
                        'tabName' => 'test',
                        'imageBrosur' => array(
                            [
                                'image' => 'commercial6.jpg'
                            ]
                        ),
                    ],
                    [
                        'title' => 'U-Ville Avenue',
                        'image' => 'commercial2.jpg',
                        'tab' => 'alteza',
                        'image1' => '',
                        'image2' => '',
                        'image3' => '',
                        'image4' => '',
                        'title1' => '',
                        'desc1' => '',
                        'desc2' => '',
                        'desc3' => '',
                        'titleBrosur' => '',
                        'listTab' => '',
                        'titleBrosur2' => '',
                        'descBrosur' => '',
                        'downloadBrosur' => '',
                        'tabName' => 'test',
                        'imageBrosur' => array(
                            [
                                'image' => ''
                            ],
                        )
                    ]
                ),
            );
        }

        $data = [
            'news' => $news,
            'detailProduct' => $detailProduct,
        ];

        return view('web.product.detail',$data);
    }

}
