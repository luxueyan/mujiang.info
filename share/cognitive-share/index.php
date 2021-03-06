<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>透过认知心理学来看UI设计</title>

		<meta name="description" content="透过认知心理学来看UI设计">
    <meta name="author" content="欢乐木酱艾瑞克 <formateric@gmail.com>">

		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<link rel="stylesheet" href="css/reveal.min.css">
		<link rel="stylesheet" href="css/theme/serif.css" id="theme">

		<!-- For syntax highlighting -->
		<link rel="stylesheet" href="lib/css/zenburn.css">

		<!-- If the query includes 'print-pdf', include the PDF print sheet -->
		<script>
			if( window.location.search.match( /print-pdf/gi ) ) {
				var link = document.createElement( 'link' );
				link.rel = 'stylesheet';
				link.type = 'text/css';
				link.href = 'css/print/pdf.css';
				document.getElementsByTagName( 'head' )[0].appendChild( link );
			}
		</script>

		<!--[if lt IE 9]>
		<script src="lib/js/html5shiv.js"></script>
		<![endif]-->
    <?php include("../../ga.php"); ?>
	</head>

	<body>
		<div class="reveal">

			<!-- Any section element inside of this container is displayed as a slide -->
			<div class="slides">
				<section>
					<h4>The rule of rule</h4>
					<h2>透过认知心理学来看UI设计</h2>
          <br>
					<p>
          <small>Created by <a target="_blank" href="http://mujiang.info">木酱</a> / <a target="_blank" href="http://weibo.com">@欢乐木匠艾瑞克</a></small>
					</p>
				</section>

				<section>
					<h2>Why?</h2>
          <p class="fragment">
            <img src="./imgs/1-dont-make-me-think.png" />
            <img src="./imgs/1-ue.png" />
            <img src="./imgs/1-thoughts.png" />
          <p>
					<p class="fragment">这些都是上层建筑</p>
          <!-- To Hit 's' -->
					<aside class="notes">
            为什么要看心理学呢？</br>
            这些是曾经风靡一时的用户体验书籍</br>
            无一例外的会给出很多指导思想</br>
            其中最著名的就是Don't Make Me Think</br>
            怎么样才能“不想”呢？</br>
            理解人的自然反应
					</aside>
				</section>

				<section>
					<h2>什么是认知心理学</h2>
					<p>这是研究认知和行为背后的心理处理的学科</p>
					<p>心理处理 (Mental Processes) 包括：感觉、注意、推理、解决问题、记忆、学习、语言、情绪……</p>

					<aside class="notes">
            通过学习认知心理学可以通过心理学家对人类神经研究、动物智力试验、跨学科的经验总结得出的科学结论来指导UI设计。</br>
					</aside>
				</section>

				<section>
          <section>
            <p>认知是以经验规律对感觉信息进行组织得到的</p>
            <p><small>——格式塔学派</small></p>
            <aside class="notes">
              经验很重要！
            </aside>
          </section>
          <section>
            <h3>临近性</h3>
            <p><img src="./imgs/3-1.png"></p>
            <aside class="notes">
              这个很常见，尤其是在文本排版中，字间距一定要比行间距小到一定程度，才能让人更愉快地阅读。
            </aside>
          </section>
          <section>
            <h3>相似性</h3>
            <p><img src="./imgs/3-2.png"></p>
            <aside class="notes">
              为什么设计中颜色不要超过三种？
              为什么网站字体/字号不要超过三种？
              ……
              过多的信息会让信息分组模糊，难于理解。
            </aside>
          </section>
          <section>
            <h3>连续性</h3>
            <p><img src="./imgs/3-3.png"></p>
            <aside class="notes">
              更典型的例子是
            </aside>
          </section>
          <section>
            <h3>封闭性</h3>
            <p><img src="./imgs/3-4.png"></p>
            <aside class="notes">
              经验很重要！
            </aside>
          </section>
          <section>
            <h3>区分背景</h3>
            <p><img src="./imgs/3-5.png"></p>
            <aside class="notes">
              通常人会自然倾向于把目标与背景区分开，但是有些时候设计会让这个行为的难度增加。</br>
              这类图就是一些愛拿人类弱点开玩笑的艺术家做出来的，只要你愿意，黑白部分都可以各自作为背景。
            </aside>
          </section>
          <section>
            <h3>共同运动、共同命运</h3>
            <p><img src="./imgs/3-6.png"></p>
            <aside class="notes">
              这种图越来越常见了，为什么会有这类图的出现？
              因为在运动中，具有相似运动方向、运动轨迹、运动趋势的点会更容易被观察到 —— 注意“更”是相对的不是绝对的。
            </aside>
          </section>
        </section>

				<section>
          <section>
            <h2>色觉</h2>

            <ul>
              <li>鉴别反差</li>
              <li>依赖颜色的呈现方式</li>
              <li>色盲</li>
              <li>显示设备</li>
            </ul>
          </section>
          <section>
            <h3>Edward H. Adelson - MIT</h3>
            <p><img src="./imgs/5-1.png" /></p>
          </section>
          <section>
            <h3>颜色的呈现方式</h3>
            <p><img src="./imgs/5-2.png" /></p>
          </section>
				</section>

				<section>
					<section>
						<h2>视觉缺陷</h2>
            <p class="fragment">
              <img src="./imgs/6-1.png" />
            </p>
            <aside class="notes">
              从感受细胞的分布上来就可以看出眼睛中间部分的分辨率非常高。（眼跳：每秒3次）</br>
              周围低密度的边界视觉提供低分辨的信息给大脑做参考，从遗传分析的角度上来说因为祖先需要保护自己，所以对运动的、危险的信号保持警惕</br>
              正因为如此所以UE、UI准则上会有不少关于视觉流程和“准确”引起注意的东西 </br>
              一大波视觉欺骗的图例，自己搜索
            </aside>
				  </section>
					<section>
            <h2><span style="float:left;">+</span><span style="float:right; color: red">@</span><br style="clear:both"/></h2>
				  </section>
				</section>

				<section>
          <section>
						<h2>记忆力有限</h2>
            <p>识别容易，回忆很难</p>
            <aside class="notes">
              <ul>
                <li>选择比输入容易</li>
                <li>识别图像比识别文字容易</li>
              </ul>
            </aside>
          </section>
				</section>

				<section>
          <section>
						<h2>赶时间</h2>
						<ul>
              <li class="fragment">声音最长间隔1ms</li>
              <li class="fragment">视觉刺激最短5ms(20fps)</li>
              <li class="fragment">对危险的条件反射80ms</li>
              <li class="fragment">形成认知100ms</li>
              <li class="fragment">连续认知140ms</li>
              <li class="fragment">判断4-5个物体数量200ms（依次数要每个300ms）</li>
              <li class="fragment">识别事物后的注意力暂失500ms（做英语听力时感觉明显）</li>
              <li class="fragment">有目的最快反应700ms</li>
              <li class="fragment">对话沉默时间1s（0.5-2）</li>
              <li class="fragment">不受干扰地进行一项操作6~30s</li>
            <ul>
          </section>
				</section>

				<section>
          <h2>最重要的是</h2>
          <ul>
            <li>经验</li>
            <li>环境</li>
            <li>目标</li>
          </ul>
				</section>

			</div>

		</div>

		<script src="lib/js/head.min.js"></script>
		<script src="js/reveal.min.js"></script>

		<script>

			// Full list of configuration options available here:
			// https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize({
				controls: true,
				progress: true,
				history: true,
				center: true,

				theme: Reveal.getQueryHash().theme, // available themes are in /css/theme
				transition: Reveal.getQueryHash().transition || 'default', // default/cube/page/concave/zoom/linear/fade/none

				// Parallax scrolling
				// parallaxBackgroundImage: 'https://s3.amazonaws.com/hakim-static/reveal-js/reveal-parallax-1.jpg',
				// parallaxBackgroundSize: '2100px 900px',

				// Optional libraries used to extend on reveal.js
				dependencies: [
					{ src: 'lib/js/classList.js', condition: function() { return !document.body.classList; } },
					{ src: 'plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: 'plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: 'plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } },
					{ src: 'plugin/zoom-js/zoom.js', async: true, condition: function() { return !!document.body.classList; } },
					{ src: 'plugin/notes/notes.js', async: true, condition: function() { return !!document.body.classList; } }
				]
			});

		</script>

    <div id="clock" style="position: fixed; z-index: 999999;right: 10px;top: 5px;color: #aeaeae;font-size: 20px;">00:00</div>
    <script>
      var start = new Date().getTime();
      var clock = document.getElementById('clock');
      tick = function(){
        var duration = Math.floor((new Date().getTime() - start) / 1000 );
        var sec = duration % 60;
        var min = Math.floor(duration / 60);
        if(sec < 10) sec = '0'+sec
        if(min < 10) min = '0'+min
        clock.innerText = min+":"+sec
        setTimeout(tick, 1000)
      }
      setTimeout(tick, 1000)
    </script>

	</body>
</html>
