
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Laravel</title>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />
        <!-- Fonts -->
        <link
            href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet"
        />
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/global.css" />
       
    </head>
    <body class="antialiased">
        @include('components.nav')
            <header>
                <div class="header-img">
                    <video autoplay="autoplay" loop controls>
                        <source
                            src="https://jacen.jac.com.cn/_nuxt/videos/brand1-bg.3eb1b0b.mp4"
                            type="video/mp4"
                        />
                    </video>
                </div>
            </header>
            <div class="container ph-brand-vision">
                <h1>Brand Vision</h1>
                <h2>
                    Better Drive,Better Life
                </h2>
                <p>Concept and meaning: JAC regards industry change as an opportunity. While insisting on independent R&D, JAC develops products that new consumers love, explores new automobile sales services and travel services, carries out extensive strategic alliances and resource integration and builds comprehensive and well-developed business ecosystem to meet the diversified and personalized needs of users, create a better vehicle life and become a leading comprehensive automobile group with outstanding performance and is well received and respected by the society.</p>
            </div>

            <div class="cmp-img-fullwidth">
                <img src="https://jacen.jac.com.cn/_nuxt/img/img3.1f6dcd5.jpg" alt="">
            </div>
           

            <div class="container ph-brand-vision">
                <h2>
                    Brand Mission
                </h2>
                <p>Provide customers with the optimal transportation solutions and driving experience to promote continuous progress of the world.</p>
            </div>

            <div class="container ph-flex-values">
                <div class="ph-values">
                    <div class="ph-val-img">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/img4-1.45c2077.jpg" alt="">

                    </div>
                    <h2>Brand Values</h2>
                    <p>Be practical and moderate, Keep learning and innovating, Dare to strive forward, Maintain open-minded and coordinated,Focus on customer-oriented, Adhere to omnidirectional communication.</p>
                </div>

                <div class="ph-values">
                    <div class="ph-val-img">
                    <img src="https://jacen.jac.com.cn/_nuxt/img/img4-2.d21045f.jpg" alt="">
                    </div>
                    <h2>Brand Core</h2>
                    <p>"Think & Create" is the grand layout of JAC to "create a better vehicle life". JAC always stays true to original aspiration, adheres to the dream of manufacturing vehicles, and raises the banner of Chinese independent brand in auto industry. "Be a Doer" is a concrete manifestation of JAC fighting spirit, and it is the hard power and pragmatic image of JAC Motors.</p>
                </div
                
            </div> 
                </div>

            <div class="cmp-img-fullwidth">
                <img src="https://jacen.jac.com.cn/_nuxt/img/img6-1.4c1d3af.jpg" alt="">
            </div>

            <div class="ph-img-fullwidth">
                <div class="ph-img-fw zoom-img">
                    <img src="https://jacen.jac.com.cn/_nuxt/img/img6-2.d5d4ba6.jpg" alt="">
                </div>
                <div class="ph-img-fw zoom-img">
                    <img src="https://jacen.jac.com.cn/_nuxt/img/img6-3.7ddd038.jpg" alt="">
                </div>
                <div class="ph-img-fw zoom-img">
                    <img src="https://jacen.jac.com.cn/_nuxt/img/img6-4.a505ba9.jpg" alt="">
                </div>
            </div>

            <div class="ph-char container">
                <div class="ph-char-infos">
                    <h2>Brand Characteristics</h2>
                    <div class="ph-char-info">
                        
                        <h3>Wisdom</h3>
                        <p>Not only has an attitude of empathy, but also has a keen and forward-looking vision, and quickly finds effective methods to help consumers solve problems and create value.</p>
                    </div>
                    <div class="ph-char-info">
                        
                        <h3>Vitality</h3>
                        <p>Continuous innovation, full of action, active change and continuous improvement; lead the industry progress with new perspectives and new concepts.</p>
                    </div>
                    <div class="ph-char-info">
                        
                        <h3>Enthusiasm</h3>
                        <p>With reliable, trustworthy and down-to-earth research, relying on leading technology and long manufacturing history, strive to introduce high-quality products, and make consumers' lives more secure and easy.</p>
                    </div>
                    <div class="ph-char-info">
                        
                        <h3>Enterprising</h3>
                        <p>Always pay attention to customer needs, actively keep an eye on market changes, follow the market trend, and take the initiative to meet various challenges instead of waiting for opportunities to come.</p>
                    </div>
                </div>
                <div class="ph-char-imgs">
                    <div class="ph-char-img zoom-img">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/img7-1.fe55090.jpg" alt="">
                    </div>
                    <div class="ph-char-img zoom-img">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/img7-2.58c3720.jpg" alt="">
                    </div>
                </div>
            </div>
            @include('components.footer')
       
        <script src="../js/app.js"> This is js</script>
    </body>
</html>

