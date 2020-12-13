<div id="port-hex" class="white-letters-inside padding-top72 padding-bottom72 col-md-12">

        <div class="row">
            <div class="col-md-12">
                <div class="text-center hexagon-elements-wrap overflow-hidden">
                    <div class="hexagon-elements-wrap-inner">

                        <?
                        $data = array(
							'null1' => '/media/files/logo/empty.png', // 'https://www.astrazeneca.ru/' => '/media/files/logo/astra_Clear_150.png',
                            '/astellas' => '/media/files/logo/astellas_200.png',
                            'http://www.janssen.com/ru' => '/media/files/logo/Janssen_200.png',
                            'https://biocad.ru/' => '/media/files/logo/BIOCAD_200.jpg',
                            'null2' => '/media/files/logo/empty.png',
                            'http://www.merck.ru/ru/' => '/media/files/logo/Merck_new_200.png',
                            '/bms' => '/media/files/logo/BMS_logo_400.png',
                            'http://www.takeda.com.ru/' => '/media/files/logo/Takeda_200.png',
                            '/sandoz' => '/media/files/logo/Partners/sandoz_200.png',
                            'https://www.novartis.ru/' => '/media/files/logo/novartis_200.png',
                            'http://www.gilead.com/' => '/media/files/logo/Gilead_200.png',
                            'http://www.veropharm.ru/' => '/media/files/logo/veropharm_200.png',
                            'http://www.generium.ru/' => '/media/files/logo/Generium_200.png',
                            'http://tsoncology.com/' => '/media/files/logo/TS_Oncology_200.png',
                            'http://www.aspenpharma.com/' => '/media/files/logo/aspen_200.jpg',
                            'http://www.teva.ru/' => '/media/files/logo/teva.png',
                            '/bioline' => '/media/files/logo/Bioline_150.png',
                            'http://www.sanofi.ru/' => '/media/files/logo/sanofi_200_clear.png',
                            'http://www.amgen.ru/' => '/media/files/logo/Amgen_200.png',
                            'http://eisai.ru/' => '/media/files/logo/logo%20eisai.gif',
                            'http://www.pierre-fabre-russia.ru/' => '/media/files/logo/PIER_FABRY.png',
                            'http://www.bayer.ru/' => '/media/files/logo/Bayer_Clear_200.png',
                            'null3' => '/media/files/logo/empty.png',
                            'http://www.roche.ru/' => '/media/files/logo/ROCHE_150.png',
                            'http://www.msd.ru/' => '/media/files/logo/MSD.JPG',
                            'http://www.alexion.com/' => '/media/files/logo/ALX.jpg',
                            'null4' => '/media/files/logo/empty.png',
                            );

                        ?>

                        <? foreach ($data as $key => $val) : ?>

                        <div class="inline-block single-hexagon-element">
                            <div class="hexagon pull-left">
                                <div class="hexagon-in1">
                                    <div class="hexagon-in2">
                                        <? if( strpos($key, 'null' ) !== false ) { $key = ''; } ?>
                                        <a class="hover-effect" href="<?=$key?>" data-element="1">
                                            <div class="table-row">
                                                <div class="table-cell">
                                                    <img src="<?=$val?>" alt="" />
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <? endforeach; ?>

                        <div class="clearfix"></div>
                    </div>
                </div>
                </div>
            </div>
    </div>