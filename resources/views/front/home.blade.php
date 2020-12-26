@extends('layouts.default')

@section('mainContent')
<main>
    <section id="home-hero" class="px-6 py-20 bg-gradient-to-bl from-primary to-red-800 text-white | md:px-32 md:flex md:items-center">
        <div class="hidden mb-8 | md:block md:px-8 md:w-1/2 md:mb-0">
            <img src="{{ asset('/assets/svg/logo.svg') }}" alt="Codefuel" class="h-32 mx-auto" />
        </div>
        <div class="w-full text-right | md:px-8 md:w-1/2">
            <h1 class="text-5xl">
                Hey There, We Are <br />
            </h1>
            <h1 class="text-5xl h-12">
                <span id="home-typed-js-hero"></span>
            </h1>
            <p class="mt-8">
                We provide solutions for all your digital needs ranging from development to desigining to marketing.
            </p>
        </div>
    </section>
    <section id="our-numbers" class="px-6 py-10 text-center w-full flex items-start | md:w-1/3 md:mx-auto">
        <div class="px-8 w-1/3">
            <h2 class="text-xl font-bold text-primary">15+</h2>
            <h4 class="text-xs">Clients</h4>
        </div>
        <div class="px-8 w-1/3">
            <h2 class="text-xl font-bold text-primary">4+</h2>
            <h4 class="text-xs">Years</h4>
        </div>
        <div class="px-8 w-1/3">
            <h2 class="text-xl font-bold text-primary">50+</h2>
            <h4 class="text-xs">Projects</h4>
        </div>
    </section>
    <section id="clients" class="bg-gradient-to-t from-white to-gray-50 border-t-2 border-gray-100 px-6 py-20 bg-white text-center | md:px-32">
        <h2 class="text-md font-bold uppercase mb-8">
            Clients we have worked with
        </h2>
        <div class="text-gray-900 | lg:flex lg:items-center lg:justify-between">
            <div class="h-20 w-full | lg:w-1/3">
                <svg class="h-20 mx-auto" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 5000 2000" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 1500 312">
                    <g id="Layer_x0020_1">
                    <metadata id="CorelCorpID_0Corel-Layer"/>
                    <rect fill="none" width="5000" height="2000"/>
                    <g id="_493461576">
                    <path fill="currentColor" d="M1570 1042l38 -115 1 0 40 115 -79 0zm119 -245l-136 0 0 2c4,8 7,18 7,28 0,17 -10,46 -14,58l-87 250c-11,32 -13,41 -34,72l0 1 114 0 0 -1c-6,-9 -8,-19 -9,-30 0,-16 8,-38 12,-50l6 -18 124 0c0,0 8,22 12,36 4,10 5,20 5,31 0,11 -2,21 -6,31l0 2 165 0 0 -2c-18,-23 -26,-48 -41,-88l-118 -322z"/>
                    <path fill="currentColor" d="M1355 1117c0,37 3,70 15,90l0 2 -161 0 0 -2c16,-28 13,-56 13,-89l0 -67 0 -16 -22 -43 -78 -145c-10,-20 -18,-33 -35,-48l0 -2 141 0 0 2 84 170 23 -47c8,-18 19,-39 23,-47 7,-14 14,-32 14,-47 1,-10 -2,-20 -9,-28l0 -3 112 0 0 2 -112 223 -8 17 0 78z"/>
                    <path fill="currentColor" d="M2169 1209l-290 0 0 -2c12,-27 13,-48 13,-88l0 -233c0,-48 -5,-67 -13,-87l0 -2 157 0 0 2c-10,28 -11,45 -11,88l0 237c20,3 40,5 61,5 48,0 72,-4 90,-12l4 0 -11 92z"/>
                    <path fill="currentColor" d="M400 967l0 -188 45 0c53,0 75,31 75,80 0,61 -35,108 -92,108l-28 0zm495 -180c-128,0 -217,79 -217,192 0,163 174,187 234,134l-10 -22c-53,11 -101,-29 -101,-119 0,-73 38,-118 92,-118 61,0 100,62 100,151 0,102 -58,179 -168,179 -125,0 -220,-99 -278,-197 65,-26 103,-74 103,-140 0,-86 -64,-146 -181,-146l-219 0 0 2c9,20 13,55 13,103l0 313c0,40 -1,61 -13,88l0 2 164 0 0 -2c-11,-26 -14,-59 -14,-88 0,-49 0,-87 0,-87l20 0c114,167 243,236 381,236 200,0 318,-126 318,-267 0,-118 -90,-214 -224,-214l0 0 0 0z"/>
                    <path fill="currentColor" d="M3144 799c-9,19 -13,39 -13,87l0 256c1,26 3,44 13,65l0 2 -96 0c-20,-9 -42,-34 -71,-65 -23,-26 -134,-153 -134,-153l-2 0c0,0 0,120 0,123 -34,3 -67,10 -100,19l0 -247c0,-48 -4,-67 -13,-87l0 -2 116 0 187 225 0 -1 0 -135c0,-48 -4,-68 -13,-87l0 -2 126 0 0 2 0 0z"/>
                    <path fill="currentColor" d="M2952 1209c-162,1 -201,90 -408,90 -64,-1 -127,-10 -189,-26l0 -2c12,-27 13,-48 13,-87l0 -378c0,-48 -4,-83 -13,-103l0 -2 334 0 12 93 -2 0c-25,-10 -56,-13 -100,-13l-89 0 0 161 43 0c66,0 105,-5 116,-8l3 0 0 97 -3 0c-14,-5 -59,-9 -114,-9l-44 0 0 160c33,7 66,11 99,12 123,0 176,-44 299,-44 4,0 7,0 11,0 16,21 34,41 53,59l-21 0z"/>
                    <path fill="currentColor" d="M3663 886l0 233c0,40 1,61 13,88l0 2 -160 0 0 -2c12,-27 14,-48 14,-88l0 -233c0,-48 -5,-68 -14,-87l0 -2 160 0 0 2c-9,19 -13,39 -13,87z"/>
                    <path fill="currentColor" d="M3343 977l11 0c59,0 78,-5 87,-7l3 0 0 85 -3 0c-12,-4 -36,-8 -85,-8l-12 0 0 70c0,41 2,69 14,90l0 2 -161 0 0 -2c12,-27 14,-48 14,-88l0 -233c0,-48 -5,-68 -14,-87l0 -2 274 0 11 83 -2 0c-19,-8 -44,-13 -84,-13l-53 0 0 110 0 0 0 0z"/>
                    <path fill="currentColor" d="M4023 1123l-11 86 -282 0 0 -2c13,-27 14,-48 14,-88l0 -233c0,-48 -5,-68 -14,-87l0 -2 275 0 10 83 -2 0c-19,-8 -44,-13 -83,-13l-53 0 0 97 11 0c58,0 78,-5 87,-7l2 0 0 85 -2 0c-13,-4 -37,-8 -85,-8l-13 0 0 97c18,3 36,4 54,4 50,0 69,-3 89,-12l3 0z"/>
                    <path fill="currentColor" d="M4750 1016c0,140 -103,252 -276,252 -134,0 -176,-59 -343,-59l-69 0 0 -2c13,-27 14,-48 14,-88l0 -233c0,-48 -5,-68 -14,-87l0 -2 160 0 0 2c-9,20 -13,50 -13,88l0 251c99,0 142,30 229,30 121,0 179,-67 179,-161 0,-80 -42,-140 -114,-140l-47 0 0 255c-44,2 -95,-4 -133,-17l0 -219c0,-48 -4,-68 -13,-87l0 -2 186 0c156,0 254,95 254,219z"/>
                    </g>
                    </g>
                </svg>
            </div>
            <div class="h-20 w-full | lg:w-1/3">
                <svg class="h-20 mx-auto" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 5000 2000" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Layer_x0020_1">
                    <metadata id="CorelCorpID_0Corel-Layer"/>
                    <g id="_305201048">
                    <path fill="currentColor" d="M1165 708l100 0 0 584 -100 0 0 -254 -302 0 0 254 -100 0 0 -584 100 0 0 235 302 0 0 -235zm398 0l110 0 223 584 -102 0 -64 -153 -230 0 -63 153 -97 0 223 -584zm132 336l-80 -216 -81 216 161 0zm700 -169c0,19 -2,37 -6,54 -5,16 -12,33 -21,48 -10,16 -22,30 -39,42 -16,12 -35,22 -58,29l171 244 -130 0 -159 -226 -95 0 0 226 -100 0 0 -584 240 0c12,0 23,1 33,1 10,1 22,3 36,5 14,3 27,6 38,11 11,4 22,10 34,19 12,8 21,18 29,30 8,11 14,26 20,43 5,17 7,37 7,58zm-337 -72l0 167 92 0c16,0 30,0 42,-1 12,-2 25,-4 38,-7 13,-4 23,-8 32,-14 8,-6 15,-15 20,-25 6,-11 9,-24 9,-38 0,-55 -41,-82 -122,-82l-111 0zm635 -95l110 0 223 584 -102 0 -64 -153 -230 0 -63 153 -97 0 223 -584zm132 336l-80 -216 -81 216 161 0zm263 -336l121 0 188 335 190 -335 116 0 0 584 -100 0 0 -437 -161 270 -94 0 -160 -270 0 437 -100 0 0 -584zm753 584l0 -584 396 0 0 96 -295 0 0 140 273 0 0 95 -273 0 0 157 295 0 0 96 -396 0z"/>
                    <rect fill="currentColor" x="250" y="1065" width="4500" height="50.4514"/>
                    </g>
                    </g>
                </svg>
            </div>
            <div class="h-20 w-full | lg:w-1/3">
                <svg class="h-20 mx-auto" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 5000 2000" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Layer_x0020_1">
                    <metadata id="CorelCorpID_0Corel-Layer"/>
                    <rect fill="none" width="5000" height="2000"/>
                    <g id="_257659960">
                    <g>
                        <path fill="currentColor" d="M1272 785c-12,115 -161,375 -242,480 -79,105 -220,209 -357,115 -63,-42 -58,-80 -82,-101 -20,28 68,215 320,139 237,-72 370,-359 437,-577 105,-348 -134,-230 -139,-159 43,-3 35,-47 79,-37 33,84 -107,207 -160,258 -14,13 -41,34 -57,46 -140,108 -329,213 -512,232 -127,13 -257,-22 -261,-153 -6,-188 217,-393 352,-495 72,-54 168,-116 262,-159 149,-68 174,-74 194,96 43,-23 85,-193 59,-221 -113,-124 -391,24 -499,105 -144,109 -344,298 -403,524 -38,149 9,270 111,324 208,113 510,-57 670,-183 89,-70 160,-140 228,-234z"/>
                        <path fill="currentColor" d="M801 1611c-144,0 -133,40 7,40 85,0 169,-18 241,-47 48,-20 165,-76 146,-129 -56,-9 -106,136 -394,136z"/>
                        <path fill="currentColor" d="M838 1693c-126,0 -117,35 6,35 75,0 148,-16 211,-42 42,-17 145,-66 128,-113 -49,-7 -93,120 -345,120z"/>
                        <path fill="currentColor" d="M885 1776c-80,0 -74,23 3,23 48,0 95,-11 135,-27 26,-11 92,-42 81,-72 -31,-5 -59,76 -219,76z"/>
                    </g>
                    <path fill="currentColor" d="M2052 823c-17,3 -28,6 -32,10 -9,8 -13,26 -13,52l0 158c0,11 -12,24 -37,38 -25,16 -52,24 -80,24 -71,0 -124,-29 -160,-86 -32,-49 -47,-116 -47,-201 0,-72 17,-134 52,-186 37,-57 84,-85 141,-85 23,0 44,5 65,16 21,9 33,14 37,14 11,0 19,-10 23,-30l15 0 5 164 -14 0c-12,-44 -24,-76 -37,-95 -21,-33 -50,-49 -86,-49 -37,0 -70,18 -99,54 -38,49 -57,119 -57,213 0,75 17,136 49,183 31,45 71,67 118,67 21,0 38,-5 53,-16 14,-11 22,-25 22,-41l0 -132c0,-31 -5,-51 -14,-60 -5,-5 -20,-9 -44,-12l0 -13 140 0 0 13zm331 148c-8,29 -22,54 -41,77 -29,35 -64,53 -105,53 -40,0 -73,-16 -97,-49 -24,-31 -35,-75 -35,-132 0,-66 17,-118 50,-155 28,-28 59,-43 93,-43 33,0 60,10 81,31 24,24 38,59 42,107l-229 0c0,131 36,196 108,196 53,0 95,-30 125,-88l8 3zm-63 -131c-7,-62 -36,-93 -86,-94 -43,0 -74,31 -92,94l178 0zm302 159c0,32 -11,58 -34,77 -20,17 -42,25 -67,25 -12,0 -28,-3 -48,-9 -18,-6 -31,-9 -36,-9 -6,0 -10,5 -12,14l-10 0 0 -121 11 0c8,36 15,59 22,70 14,24 36,36 68,36 46,0 69,-20 69,-60 0,-23 -13,-44 -41,-64l-41 -29c-36,-24 -56,-39 -61,-44 -18,-18 -27,-40 -27,-66 0,-25 7,-47 22,-66 19,-21 44,-31 75,-31 12,0 25,3 39,9 13,6 21,9 23,9 5,0 8,-4 9,-12l11 0 5 105 -12 0c-7,-39 -17,-66 -30,-80 -10,-11 -25,-16 -46,-16 -20,0 -36,7 -49,20 -11,12 -16,25 -16,40 0,23 12,43 36,59l78 53c22,15 37,27 44,36 12,15 18,33 18,54zm213 44c-7,18 -18,32 -33,42 -15,11 -30,16 -46,16 -19,0 -33,-7 -42,-20 -10,-16 -14,-42 -14,-80l0 -250 -51 0c0,-10 1,-15 1,-16 5,-1 16,-8 33,-21 18,-18 34,-47 48,-87l8 0 0 102 82 0 0 22 -82 0 0 233c0,31 2,51 6,60 6,14 18,20 37,20 19,-1 34,-9 45,-25l8 4zm357 23c-18,5 -47,16 -86,33l0 -83c-11,14 -26,32 -45,52 -25,21 -49,32 -73,34 -18,0 -33,-7 -46,-21 -17,-18 -26,-46 -26,-84l0 -197c0,-38 -18,-58 -53,-60l0 -11 89 0 0 265c0,45 21,67 61,67 19,0 42,-14 70,-41 14,-13 20,-29 20,-51l0 -168c0,-19 -4,-32 -11,-40 -9,-11 -26,-17 -50,-18l0 -14 98 0 0 270c0,35 17,52 52,52l0 15zm257 -302c0,17 -7,25 -21,25 -8,0 -18,-3 -28,-9 -10,-6 -18,-9 -25,-8 -9,1 -21,12 -36,34 -15,22 -22,40 -22,53l0 155c0,27 6,46 19,56 9,8 25,12 47,13l0 12 -164 0 0 -12c22,-4 37,-9 44,-16 10,-9 14,-25 14,-48l0 -186c0,-37 -12,-56 -35,-56 -9,0 -16,1 -21,2l0 -12c21,-8 53,-22 96,-42l0 93 8 -12c21,-31 37,-52 47,-63 14,-13 29,-20 43,-20 23,1 34,15 34,41zm310 207c-8,29 -22,54 -41,77 -29,35 -64,53 -105,53 -41,0 -73,-16 -97,-49 -24,-31 -36,-75 -36,-132 0,-66 17,-118 51,-155 28,-28 59,-43 93,-43 33,0 60,10 81,31 24,24 38,59 42,107l-230 0c1,131 37,196 109,196 53,0 94,-30 125,-88l8 3zm-63 -131c-7,-62 -36,-93 -86,-94 -43,0 -74,31 -92,94l178 0z"/>
                    <path fill="currentColor" d="M2872 1302l0 33c-8,5 -18,8 -27,8 -24,0 -43,-19 -43,-42 0,-24 19,-42 43,-42 12,0 25,5 34,13l11 -14c-11,-11 -28,-17 -45,-17 -36,0 -63,26 -63,60 0,33 27,60 62,60 16,0 34,-7 46,-16l0 -43 -18 0zm83 -33c-28,0 -47,19 -47,46 0,27 19,45 47,45 28,0 47,-18 47,-45 0,-27 -19,-46 -47,-46zm0 17c16,0 27,12 27,29 0,17 -11,29 -27,29 -16,0 -27,-12 -27,-29 0,-17 11,-29 27,-29zm138 -17c-18,0 -34,8 -34,26 0,32 48,22 48,41 0,6 -7,9 -15,9 -10,0 -22,-4 -30,-11l-7 14c9,8 23,12 36,12 18,0 34,-8 34,-26 1,-33 -47,-24 -47,-41 0,-6 5,-8 13,-8 8,0 18,3 26,7l7 -14c-8,-6 -20,-9 -31,-9zm169 0c-16,0 -28,7 -34,22 -4,-14 -15,-22 -31,-22 -15,0 -27,6 -33,18l0 -17 -19 0 0 90 19 0 0 -45c0,-15 10,-27 25,-28 13,0 21,9 21,22l0 51 20 0 0 -45c0,-15 9,-27 24,-28 14,0 22,9 22,22l0 51 19 0 0 -56c0,-22 -12,-35 -33,-35zm113 91l19 0 0 -59c0,-20 -13,-32 -36,-32 -18,0 -27,4 -39,11l8 14c9,-6 18,-9 26,-9 14,0 22,7 22,18l0 3 -27 0c-22,0 -34,10 -34,27 0,16 12,28 31,28 13,0 24,-4 30,-12l0 11zm-26 -15c-11,0 -17,-5 -17,-13 0,-9 6,-12 18,-12l25 0 0 8c-1,10 -12,17 -26,17zm90 -75l-19 0 0 90 19 0 0 -47c2,-16 13,-26 31,-25l0 -19c-14,0 -25,7 -31,19l0 -18zm93 69c-5,3 -9,4 -13,4 -6,0 -10,-3 -10,-12l0 -43 27 0 0 -15 -27 0 0 -24 -19 0 0 24 -13 0 0 15 13 0 0 46c0,19 12,27 25,27 8,0 15,-3 22,-7l-5 -15zm59 -70c-27,0 -45,19 -45,46 0,27 18,45 46,45 15,0 28,-5 37,-15l-11 -11c-6,7 -15,11 -25,11 -14,0 -25,-9 -28,-23l68 0c2,-32 -10,-53 -42,-53zm-26 39c2,-14 12,-23 26,-23 15,0 25,8 25,23l-51 0zm108 -38l-20 0 0 90 20 0 0 -47c1,-16 13,-26 31,-25l0 -19c-14,0 -25,7 -31,19l0 -18zm51 69c-6,0 -11,4 -11,11 0,6 5,11 11,11 6,0 11,-5 11,-11 0,-7 -5,-11 -11,-11zm158 -37l0 33c-8,5 -18,8 -27,8 -24,0 -43,-19 -43,-42 0,-24 19,-42 43,-42 12,0 25,5 34,13l11 -14c-11,-11 -28,-17 -45,-17 -36,0 -63,26 -63,60 0,33 27,60 62,60 16,0 34,-7 46,-16l0 -43 -18 0zm83 -33c-28,0 -47,19 -47,46 0,27 19,45 47,45 28,0 47,-18 47,-45 0,-27 -19,-46 -47,-46zm0 17c16,0 27,12 27,29 0,17 -11,29 -27,29 -16,0 -27,-12 -27,-29 0,-17 11,-29 27,-29zm162 -17c-14,0 -24,6 -31,16l0 -51 -19 0 0 126 19 0 0 -16c7,11 17,16 32,16 25,0 42,-18 42,-45 0,-27 -17,-46 -43,-46zm-4 75c-16,0 -27,-12 -27,-30 0,-16 11,-29 27,-29 16,0 28,13 28,29 0,18 -12,30 -28,30zm87 -74l-20 0 0 90 20 0 0 -47c1,-16 13,-26 31,-25l0 -19c-14,0 -25,7 -31,19l0 -18zm57 -38c-7,0 -12,5 -12,12 0,7 5,12 12,12 6,0 11,-5 11,-12 0,-7 -5,-12 -11,-12zm9 128l0 -90 -19 0 0 90 19 0zm110 -90l-19 0 0 14c-7,-9 -17,-15 -31,-15 -24,0 -40,18 -40,43 0,26 17,43 41,43 13,0 24,-5 30,-15l0 11c0,16 -11,26 -29,26 -10,0 -19,-4 -28,-10l-8 14c11,8 23,12 37,12 29,0 47,-16 47,-42l0 -81zm-45 70c-16,0 -26,-11 -26,-28 0,-16 10,-27 26,-27 15,0 26,11 26,27 0,17 -11,28 -26,28zm125 -71c-15,0 -26,6 -33,18l0 -53 -19 0 0 126 19 0 0 -45c0,-15 10,-27 26,-28 13,0 21,9 21,22l0 51 20 0 0 -56c0,-22 -13,-35 -34,-35zm106 70c-5,3 -10,4 -14,4 -6,0 -9,-3 -9,-12l0 -43 26 0 0 -15 -26 0 0 -24 -20 0 0 24 -12 0 0 15 12 0 0 46c0,19 12,27 26,27 7,0 15,-3 22,-7l-5 -15zm58 -70c-26,0 -45,19 -45,46 0,27 18,45 46,45 16,0 28,-5 37,-15l-10 -11c-7,7 -16,11 -25,11 -15,0 -25,-9 -28,-23l68 0c2,-32 -11,-53 -43,-53zm-26 39c3,-14 12,-23 27,-23 14,0 24,8 25,23l-52 0zm108 -38l-19 0 0 90 19 0 0 -47c2,-16 13,-26 31,-25l0 -19c-14,0 -25,7 -31,19l0 -18z"/>
                    <path fill="currentColor" d="M4114 1062l0 21 -190 0 0 -348 25 0 0 327 165 0zm267 0l0 21 -209 0 0 -348 209 0 0 21 -183 0 0 141 152 0 0 20 -152 0 0 145 183 0zm369 -153c0,27 -4,51 -12,73 -8,21 -19,39 -34,54 -15,15 -32,27 -52,35 -21,8 -43,12 -68,12l-127 0 0 -348 127 0c25,0 47,4 68,13 20,8 37,19 52,34 15,15 26,33 34,55 8,21 12,45 12,72zm-26 0c0,-24 -3,-46 -10,-65 -7,-19 -16,-35 -29,-48 -12,-13 -27,-23 -44,-30 -17,-7 -36,-10 -57,-10l-102 0 0 307 102 0c21,0 40,-4 57,-11 17,-7 32,-17 44,-30 13,-13 22,-29 29,-48 7,-19 10,-40 10,-65z"/>
                    </g>
                    </g>
                </svg>
            </div>
        </div>
    </section>
</main>
@endsection