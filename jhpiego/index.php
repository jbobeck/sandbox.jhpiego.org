<?php  get_header();
    require_once('components/navbar.inc.php'); 

    if ( have_posts() ) {
        while ( have_posts() ) {
            
            the_post();
            
            $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
            
?>


    <!--Main Navigation-->
    <header>
        
  <!-- Full Page Intro -->
    <div class="view" style="background: url('<?php echo $backgroundImg[0] ?>'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <!-- Mask & flexbox options-->
    <div class="mask d-flex justify-content-center align-items-center">
      <!-- Content -->
      <div class="container">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-md-6 white-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft" data-wow-delay="0.3s">
           
          </div>
          <!--Grid column-->
          <!--Grid column-->
          <div class="col-md-6 white-text col-xl-5 mt-xl-5 wow fadeInRight" data-wow-delay="0.3s">
               <h1 class="h1-responsive font-weight-bold mt-sm-5">A hard truth</h1>
               <h6 class="mb-4">In the time it takes to introduce you to Anesta, a woman like her has died from preventable causes related to pregnancy and childbirth.</h6>
              <a class="btn btn-warning">Donate</a>
              
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
  </div>
  <!-- Full Page Intro -->
        


    </header>
    <!--Main Navigation-->

      
    
    <!--Main Layout-->
    <main>

        <div class="container">

            <!--Section: Features v.4-->
            <section class="section wow fadeIn" data-wow-delay="0.3s">

                <!--Section heading-->
                <h1 class="font-weight-bold text-center h1 my-5 teal">Typography</h1>
                <!--Section description-->
                <p class="text-center grey-text mb-5 mx-auto w-responsive lead">This is a lead paragraph that is centered. Documentation and examples for Bootstrap typography, including global settings, headings, body text, lists, and more.</p>
                
                
                
                
                
                
                <!--Section: Docs content-->
                            <section class="documentation">
                              <!--Section: Intro-->


<!--Section: headings-->
<section id="headings">

  <!--Title-->
  <h2 class="section-heading mb-4">Heading</h2>

  <!-- Description -->
  <p class="description my-4">All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code>, are available.</p>

  <!--Section: Live preview-->
  <section>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Heading</th>
          <th>Example</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <p><code>&lt;h1&gt;&lt;/h1&gt;</code></p>

          </td>
          <td>
            <h2 class="h1 my-2 font-weight-light">h1. Bootstrap heading</h2>
          </td>
        </tr>
        <tr>
          <td>
            <p><code>&lt;h2&gt;&lt;/h2&gt;</code></p>

          </td>
          <td>
            <h2 class="my-2">h2. Bootstrap heading</h2>
          </td>
        </tr>
        <tr>
          <td>
            <p><code>&lt;h3&gt;&lt;/h3&gt;</code></p>

          </td>
          <td>
            <h3 class="my-2">h3. Bootstrap heading</h3>
          </td>
        </tr>
        <tr>
          <td>
            <p><code>&lt;h4&gt;&lt;/h4&gt;</code></p>

          </td>
          <td>
            <h4 class="my-2">h4. Bootstrap heading</h4>
          </td>
        </tr>
        <tr>
          <td>
            <p><code>&lt;h5&gt;&lt;/h5&gt;</code></p>

          </td>
          <td>
            <h5 class="my-2">h5. Bootstrap heading</h5>
          </td>
        </tr>
        <tr>
          <td>
            <p><code>&lt;h6&gt;&lt;/h6&gt;</code></p>

          </td>
          <td>
            <h6 class="my-2">h6. Bootstrap heading</h6>
          </td>
        </tr>
      </tbody>
    </table>

  </section>
  <!--Section: Live preview-->

  <!--Section: Code-->
  <section>
    <!-- jhpiegosnippet --><div class="docs-pills">  <div class="d-flex justify-content-between">    <ul class="nav md-pills pills-grey"><li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#jhpiego_56ee10a7b54b1923df25fb0fe13e40d4" role="tab">HTML</a></li></ul></div><div class="tab-content"><div class="tab-pane fade active show light-grey-color" id="jhpiego_56ee10a7b54b1923df25fb0fe13e40d4" role="tabpanel">
      
      <pre class="grey lighten-3 px-3 mb-0 line-numbers language-html" >
      
<code>

        &lt;h1&gt;h1. Bootstrap heading&lt;/h1&gt;
        &lt;h2&gt;h2. Bootstrap heading&lt;/h2&gt;
        &lt;h3&gt;h3. Bootstrap heading&lt;/h3&gt;
        &lt;h4&gt;h4. Bootstrap heading&lt;/h4&gt;
        &lt;h5&gt;h5. Bootstrap heading&lt;/h5&gt;
        &lt;h6&gt;h6. Bootstrap heading&lt;/h6&gt;
</code>
      </pre></div></div></div><!-- /.jhpiegosnippet -->
  </section>
  <!--Section: Code-->

  <h4 class="mb-3" id="heading-classes"><strong>Heading classes</strong></h4>

  <p class="mb-4"><code>.h1</code> through <code>.h6</code> classes are also available, for when you want to match the
    font styling
    of a heading but cannot use the associated HTML element.</p>

  <!--Section: Live preview-->
  <section class="mb-4">

    <p class="h1">h1. Bootstrap heading</p>
    <hr>
    <p class="h2">h2. Bootstrap heading</p>
    <hr>
    <p class="h3">h3. Bootstrap heading</p>
    <hr>
    <p class="h4">h4. Bootstrap heading</p>
    <hr>
    <p class="h5">h5. Bootstrap heading</p>
    <hr>
    <p class="h6">h6. Bootstrap heading</p>

  </section>
  <!--Section: Live preview-->


  <section>
    <!-- jhpiegosnippet --><div class="docs-pills">  <div class="d-flex justify-content-between">    <ul class="nav md-pills pills-grey"><li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#jhpiego_7f275ad8918a70bf37a99b225266daef" role="tab">HTML</a></li></ul></div><div class="tab-content"><div class="tab-pane fade active show light-grey-color" id="jhpiego_7f275ad8918a70bf37a99b225266daef" role="tabpanel">
      
      <pre class="grey lighten-3 px-3 mb-0 line-numbers language-html" >
      
      <code>

        &lt;p class=&quot;h1&quot;&gt;h1. Bootstrap heading&lt;/p&gt;
        &lt;p class=&quot;h2&quot;&gt;h2. Bootstrap heading&lt;/p&gt;
        &lt;p class=&quot;h3&quot;&gt;h3. Bootstrap heading&lt;/p&gt;
        &lt;p class=&quot;h4&quot;&gt;h4. Bootstrap heading&lt;/p&gt;
        &lt;p class=&quot;h5&quot;&gt;h5. Bootstrap heading&lt;/p&gt;
        &lt;p class=&quot;h6&quot;&gt;h6. Bootstrap heading&lt;/p&gt;
</code>
      </pre></div></div></div><!-- /.jhpiegosnippet -->
  </section>
  <!--Section: Code-->

  <!--Subheading-->
  <h4 id="responsive-headings" class="mt-5 mb-3"><strong>Responsive headings</strong></h4>

  <!--Description-->
  <p>By adding an appropriate class, you can make your heading responsive. Thanks to that it will look good on all
    screen sizes. </p>
  <p><strong>Resize your browser windows to see the effect.</strong></p>

  <!--Section: Live preview-->
  <section>

    <h2 class="h1-responsive">h1. heading</h2>
    <hr>
    <h2 class="h2-responsive">h2. heading</h2>
    <hr>
    <h3 class="h3-responsive">h3. heading</h3>
    <hr>
    <h4 class="h4-responsive">h4. heading</h4>
    <hr>
    <h5 class="h5-responsive">h5. heading</h5>

  </section>
  <!--Section: Live preview-->

  <!--Section: Code-->
  <section>

    <!-- jhpiegosnippet --><div class="docs-pills">  <div class="d-flex justify-content-between">    <ul class="nav md-pills pills-grey"><li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#jhpiego_e32122bd004be9e89004579e984eaab6" role="tab">HTML</a></li></ul></div><div class="tab-content"><div class="tab-pane fade active show light-grey-color" id="jhpiego_e32122bd004be9e89004579e984eaab6" role="tabpanel">
      
      <pre class="grey lighten-3 px-3 mb-0 line-numbers language-html" >
      
      <code>

        &lt;h2 class=&quot;h1-responsive&quot;&gt;h1. heading&lt;/h2&gt;
        &lt;hr&gt;
        &lt;h2 class=&quot;h2-responsive&quot;&gt;h2. heading&lt;/h2&gt;
        &lt;hr&gt;
        &lt;h3 class=&quot;h3-responsive&quot;&gt;h3. heading&lt;/h3&gt;
        &lt;hr&gt;
        &lt;h4 class=&quot;h4-responsive&quot;&gt;h4. heading&lt;/h4&gt;
        &lt;hr&gt;
        &lt;h5 class=&quot;h5-responsive&quot;&gt;h5. heading&lt;/h5&gt;
</code>

      </pre>
      </div></div></div><!-- /.jhpiegosnippet -->

  </section>
  <!--Section: Code-->

  <!--Subheading-->
  <h4 id="secondary-text" class="mt-5"><strong>Customizing headings</strong></h4>

  <!--Description-->
  <p class="description my-4">Use the included utility classes to recreate the small secondary heading text from
    Bootstrap 3.</p>


  <!--Section: Live preview-->
  <section class="section-preview">

    <h3>
      <strong>Fancy display heading</strong>
      <small class="text-muted">With faded secondary text</small>
    </h3>

  </section>
  <!--Section: Live preview-->

  <!--Section: Code-->
  <section>

    <!-- jhpiegosnippet --><div class="docs-pills">  <div class="d-flex justify-content-between">    <ul class="nav md-pills pills-grey"><li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#jhpiego_cf23574a2554daedd17c73fe86247ef9" role="tab">HTML</a></li></ul></div><div class="tab-content"><div class="tab-pane fade active show light-grey-color" id="jhpiego_cf23574a2554daedd17c73fe86247ef9" role="tabpanel"><pre class="grey lighten-3 px-3 mb-0 line-numbers language-html" ><code>

        &lt;h3&gt;
          &lt;strong&gt;Fancy display heading&lt;/strong&gt;
          &lt;small class=&quot;text-muted&quot;&gt;With faded secondary text&lt;/small&gt;
        &lt;/h3&gt;
        
</code>
      </pre></div></div></div><!-- /.jhpiegosnippet -->

  </section>
  <!--Section: Code-->

</section>
<!--/Section: headings-->

<hr class="mt-4 mb-5">

<!--Section: -->
<section id="display-headings">

  <!--Title-->
  <h2 class="section-heading mb-4">
    Display headings
  </h2>

  <!-- Description -->
  <p class="description my-4">Traditional heading elements are designed to work best in the meat of your page content.
    When you need a heading
    to stand out, consider using a <strong>display heading</strong> — a larger, slightly more opinionated heading
    style.
  </p>

  <!--Section: Live preview-->
  <section class="section-preview">

    <h2 class="h1 display-1">Display 1</h2>
    <hr>
    <h2 class="display-2">Display 2</h2>
      <hr>
      <h3 class="display-3">Display 3</h3>
        <hr>
        <h4 class="display-4">Display 4</h4>

  </section>
  <!--Section: Live preview-->

  <!--Section: Code-->
  <section>
    <!-- jhpiegosnippet --><div class="docs-pills">  <div class="d-flex justify-content-between">    <ul class="nav md-pills pills-grey"><li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#jhpiego_126f915233dc99364692b491b5cd4382" role="tab">HTML</a></li></ul></div><div class="tab-content"><div class="tab-pane fade active show light-grey-color" id="jhpiego_126f915233dc99364692b491b5cd4382" role="tabpanel"><pre class="grey lighten-3 px-3 mb-0 line-numbers language-html" ><code>

        &lt;h1 class=&quot;display-1&quot;&gt;Display 1&lt;/h1&gt;
        &lt;h1 class=&quot;display-2&quot;&gt;Display 2&lt;/h1&gt;
        &lt;h1 class=&quot;display-3&quot;&gt;Display 3&lt;/h1&gt;
        &lt;h1 class=&quot;display-4&quot;&gt;Display 4&lt;/h1&gt;
        
</code>
      </pre></div></div></div><!-- /.jhpiegosnippet -->
  </section>
  <!--Section: Code-->

</section>
<!--/Section: display-->

<hr class="mt-4 mb-5">

<!--Section: -->
<section id="lead">

  <!--Title-->
  <h2 class="section-heading mb-4">
    Lead
  </h2>

  <!-- Description -->
  <p class="description my-4">Make a paragraph stand out by adding <code>.lead</code></p>

  <!--Section: Live preview-->
  <section class="section-preview">

    <h5>
      <u>Lead</u>
    </h5>
    <p class="lead">
      Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
    </p>

    <br>
    <h5>
      <u>Regular paragraph</u>
    </h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis tenetur sit voluptatem molestias ad neque
      veritatis!
      Alias natus, nobis laudantium, veritatis, atque illum ipsam nisi voluptas nesciunt harum laborum perspiciatis!</p>

  </section>
  <!--Section: Live preview-->

  <!--Section: Code-->
  <section>
    <!-- jhpiegosnippet --><div class="docs-pills">  <div class="d-flex justify-content-between">    <ul class="nav md-pills pills-grey"><li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#jhpiego_f3ee3ad3ac9fa53f67cc093fdc3fdd5d" role="tab">HTML</a></li></ul></div><div class="tab-content"><div class="tab-pane fade active show light-grey-color" id="jhpiego_f3ee3ad3ac9fa53f67cc093fdc3fdd5d" role="tabpanel"><pre class="grey lighten-3 px-3 mb-0 line-numbers language-html" ><code>

        &lt;p class=&quot;lead&quot;&gt;
          Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
        &lt;/p&gt;
        
</code>
      </pre></div></div></div><!-- /.jhpiegosnippet -->
  </section>
  <!--Section: Code-->

</section>
<!--/Section: -->

<!--Section: text-elements-->
<section id="text-elements">

  <!--Title-->
  <h2 class="section-heading mb-4">
    Inline text elements
  </h2>

  <!-- Description -->
  <p class="description my-4">Styling for common inline HTML5 elements.</p>


  <!--Section: Live preview-->
  <section class="section-preview">

    <p>You can use the mark tag to
      <mark>highlight</mark> text.</p>
    <p>
      <del>This line of text is meant to be treated as deleted text.</del>
    </p>
    <p>
      <s>This line of text is meant to be treated as no longer accurate.</s>
    </p>
    <p>
      <ins>This line of text is meant to be treated as an addition to the document.</ins>
    </p>
    <p>
      <u>This line of text will render as underlined</u>
    </p>
    <p><small>This line of text is meant to be treated as fine print.</small></p>
    <p><strong>This line rendered as bold text.</strong></p>
    <p><em>This line rendered as italicized text.</em></p>

  </section>
  <!--Section: Live preview-->

  <!--Section: Code-->
  <section>
    <!-- jhpiegosnippet --><div class="docs-pills">  <div class="d-flex justify-content-between">    <ul class="nav md-pills pills-grey"><li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#jhpiego_bf529f0c2992b1144344635a88da779c" role="tab">HTML</a></li></ul></div><div class="tab-content"><div class="tab-pane fade active show light-grey-color" id="jhpiego_bf529f0c2992b1144344635a88da779c" role="tabpanel"><pre class="grey lighten-3 px-3 mb-0 line-numbers language-html" ><code>

        &lt;p&gt;You can use the mark tag to &lt;mark&gt;highlight&lt;/mark&gt; text.&lt;/p&gt;
        &lt;p&gt;&lt;del&gt;This line of text is meant to be treated as deleted text.&lt;/del&gt;&lt;/p&gt;
        &lt;p&gt;&lt;s&gt;This line of text is meant to be treated as no longer accurate.&lt;/s&gt;&lt;/p&gt;
        &lt;p&gt;&lt;ins&gt;This line of text is meant to be treated as an addition to the document.&lt;/ins&gt;&lt;/p&gt;
        &lt;p&gt;&lt;u&gt;This line of text will render as underlined&lt;/u&gt;&lt;/p&gt;
        &lt;p&gt;&lt;small&gt;This line of text is meant to be treated as fine print.&lt;/small&gt;&lt;/p&gt;
        &lt;p&gt;&lt;strong&gt;This line rendered as bold text.&lt;/strong&gt;&lt;/p&gt;
        &lt;p&gt;&lt;em&gt;This line rendered as italicized text.&lt;/em&gt;&lt;/p&gt;
</code>

      </pre></div></div></div><!-- /.jhpiegosnippet -->
  </section>
  <!--Section: Code-->

  <p><code>.mark</code> and <code>.small</code> classes are also available to apply the same styles as <code>&lt;mark&gt;</code>
    and <code>&lt;small&gt;</code> while avoiding any unwanted semantic implications that the tags would bring.
  </p>

  <p>While not shown above, feel free to use <code>&lt;b&gt;</code> and <code>&lt;i&gt;</code> in HTML5. <code>&lt;b&gt;</code>
    is meant to highlight words or phrases without conveying additional importance while <code>&lt;i&gt;</code> is
    mostly for voice, technical terms, etc.</p>

</section>
<!--/Section: text-inline-->

<hr class="mt-4 mb-5">

<!--Section: Text utilities-->
<section id="text-utilities">

  <!--Title-->
  <h2 class="section-heading mb-4">
    Text utilities
  </h2>

  <!-- Description -->
  <p class="description my-4">Change text alignment, transform, style, weight, and color with text
      utilities and color utilities.</p>

</section>
<!--/Section: Text utilities-->

<hr class="mt-4 mb-5">

<!--Section: -->
<section id="abbreviations">

  <!--Title-->
  <h2 class="section-heading mb-4">
    Abbreviations
  </h2>

  <!-- Description -->
  <p>
  </p>

  <!--Section: Live preview-->
  <section class="section-preview">

    <p>Stylized implementation of HTML’s <code>&lt;abbr&gt;</code> element for abbreviations and acronyms to show the
      expanded version on hover. Abbreviations have a default underline from Normalize.css and gain a help cursor
      to provide additional context on hover and to users of assistive technologies.</p>
    <p>Add <code>.initialism</code> to an abbreviation for a slightly smaller font-size.</p>

  </section>
  <!--Section: Live preview-->

  <!--Section: Code-->
  <section>
    <!-- jhpiegosnippet --><div class="docs-pills">  <div class="d-flex justify-content-between">    <ul class="nav md-pills pills-grey"><li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#jhpiego_ed141bf36ea47ad57d07fa62c455abb2" role="tab">HTML</a></li></ul></div><div class="tab-content"><div class="tab-pane fade active show light-grey-color" id="jhpiego_ed141bf36ea47ad57d07fa62c455abb2" role="tabpanel"><pre class="grey lighten-3 px-3 mb-0 line-numbers language-html" ><code>

        &lt;p&gt;&lt;abbr title=&quot;attribute&quot;&gt;attr&lt;/abbr&gt;&lt;/p&gt;
        &lt;p&gt;&lt;abbr title=&quot;HyperText Markup Language&quot; class=&quot;initialism&quot;&gt;HTML&lt;/abbr&gt;&lt;/p&gt;
</code>
      </pre></div></div></div><!-- /.jhpiegosnippet -->
  </section>
  <!--Section: Code-->

</section>
<!--/Section: abbreviations-->

<hr class="mt-4 mb-5">

<!--Section: -->
<section id="blockquotes">

  <!--Title-->
  <h2 class="section-heading mb-4">
    Blockquotes
  </h2>

  <!-- Description -->
  <p class="description my-4">For quoting blocks of content from another source within your document. Wrap <code>&lt;blockquote
      class=&quot;blockquote&quot;&gt;</code> around any HTML as the quote.</p>


  <!--Section: Live preview-->
  <section>

    <blockquote class="blockquote">
      <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    </blockquote>

  </section>
  <!--Section: Live preview-->

  <!--Section: Code-->
  <section>
    <!-- jhpiegosnippet --><div class="docs-pills">  <div class="d-flex justify-content-between">    <ul class="nav md-pills pills-grey"><li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#jhpiego_0a3b6f90d86777d600fa917040f079ae" role="tab">HTML</a></li></ul></div><div class="tab-content"><div class="tab-pane fade active show light-grey-color" id="jhpiego_0a3b6f90d86777d600fa917040f079ae" role="tabpanel"><pre class="grey lighten-3 px-3 mb-0 line-numbers language-html" ><code>

        &lt;blockquote class=&quot;blockquote&quot;&gt;
          &lt;p class=&quot;mb-0&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
        &lt;/blockquote&gt;
</code>
      </pre></div></div></div><!-- /.jhpiegosnippet -->
  </section>
  <!--Section: Code-->

  <!--Subheading-->
  <h4 id="naming-source" class="mt-5"><strong>Naming a source</strong></h4>

  <!--Description-->
  <p class="description"></p>

  <!--Section: Live preview-->
  <section>

    <blockquote class="blockquote">
      <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer class="blockquote-footer mb-3">Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>

  </section>
  <!--Section: Live preview-->

  <!--Section: Code-->
  <section>

    <!-- jhpiegosnippet --><div class="docs-pills">  <div class="d-flex justify-content-between">    <ul class="nav md-pills pills-grey"><li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#jhpiego_627ff239695d8c60cbf9b9143b5b4cec" role="tab">HTML</a></li></ul></div><div class="tab-content"><div class="tab-pane fade active show light-grey-color" id="jhpiego_627ff239695d8c60cbf9b9143b5b4cec" role="tabpanel"><pre class="grey lighten-3 px-3 mb-0 line-numbers language-html" ><code>

        &lt;blockquote class=&quot;blockquote&quot;&gt;
          &lt;p class=&quot;mb-0&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
          &lt;footer class=&quot;blockquote-footer mb-3&quot;&gt;Someone famous in &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;&lt;/footer&gt;
        &lt;/blockquote&gt;
</code>
      </pre></div></div></div><!-- /.jhpiegosnippet -->

  </section>
  <!--Section: Code-->


  <!--Subheading-->
  <h4 id="alignment" class="mt-5"><strong>Alignment</strong></h4>

  <!--Description-->
  <p class="description my-4">Use text utilities as needed to change the alignment of your blockquote.</p>

  <!--Section: Live preview-->
  <section>

    <blockquote class="blockquote text-center">
      <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer class="blockquote-footer mb-3">Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>

  </section>
  <!--Section: Live preview-->

  <!--Section: Code-->
  <section>

    <!-- jhpiegosnippet --><div class="docs-pills">  <div class="d-flex justify-content-between">    <ul class="nav md-pills pills-grey"><li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#jhpiego_c41bb77522e94d737ffbdf450a914210" role="tab">HTML</a></li></ul></div><div class="tab-content"><div class="tab-pane fade active show light-grey-color" id="jhpiego_c41bb77522e94d737ffbdf450a914210" role="tabpanel"><pre class="grey lighten-3 px-3 mb-0 line-numbers language-html" ><code>

        &lt;blockquote class=&quot;blockquote text-center&quot;&gt;
          &lt;p class=&quot;mb-0&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
          &lt;footer class=&quot;blockquote-footer mb-3&quot;&gt;Someone famous in &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;&lt;/footer&gt;
        &lt;/blockquote&gt;
</code>
      </pre></div></div></div><!-- /.jhpiegosnippet -->

  </section>
  <!--Section: Code-->

</section>
<!--/Section: blockquotes-->

<hr class="mt-4 mb-5">

<!--Section: notifications-->
<section id="notifications">

  <!--Title-->
  <h2 class="section-heading mb-4">
    Text notifications
  </h2>

  <!-- Description -->
  <p class="description my-4">If you want to interject into the middle of the article important information for the
    user, use notifications.</p>


  <!--Section: Live preview-->
  <section>

    <blockquote class="blockquote bq-primary">
      <p class="bq-title">Info notification</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quibusdam dignissimos itaque harum illo!
        Quidem, corporis at quae tempore nisi impedit cupiditate perferendis nesciunt, ex dolores doloremque!
        Sit, rem, in?
      </p>
    </blockquote>

  </section>
  <!--Section: Live preview-->

  <!--Section: Code-->
  <section>
    <!-- jhpiegosnippet --><div class="docs-pills">  <div class="d-flex justify-content-between">    <ul class="nav md-pills pills-grey"><li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#jhpiego_a479ae9c0f6d204e07352f0f653fc379" role="tab">HTML</a></li></ul></div><div class="tab-content"><div class="tab-pane fade active show light-grey-color" id="jhpiego_a479ae9c0f6d204e07352f0f653fc379" role="tabpanel"><pre class="grey lighten-3 px-3 mb-0 line-numbers language-html" ><code>

        &lt;blockquote class=&quot;blockquote bq-primary&quot;&gt;
          &lt;p class=&quot;bq-title&quot;&gt;Info notification&lt;/p&gt;
          &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quibusdam dignissimos itaque harum illo!
            Quidem, corporis at quae tempore nisi impedit cupiditate perferendis nesciunt, ex dolores doloremque!
            Sit, rem, in?
          &lt;/p&gt;
        &lt;/blockquote&gt;
</code>
      </pre></div></div></div><!-- /.jhpiegosnippet -->
  </section>
  <!--Section: Code-->

  <!--Section: Live preview-->
  <section>

    <blockquote class="blockquote bq-warning">
      <p class="bq-title">Warning notification</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quibusdam dignissimos itaque harum illo!
        Quidem, corporis at quae tempore nisi impedit cupiditate perferendis nesciunt, ex dolores doloremque!
        Sit, rem, in?
      </p>
    </blockquote>

  </section>
  <!--Section: Live preview-->

  <!--Section: Code-->
  <section>
    <!-- jhpiegosnippet --><div class="docs-pills">  <div class="d-flex justify-content-between">    <ul class="nav md-pills pills-grey"><li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#jhpiego_140aaa688b028862a5fae3920cca37cc" role="tab">HTML</a></li></ul></div><div class="tab-content"><div class="tab-pane fade active show light-grey-color" id="jhpiego_140aaa688b028862a5fae3920cca37cc" role="tabpanel"><pre class="grey lighten-3 px-3 mb-0 line-numbers language-html" ><code>

        &lt;blockquote class=&quot;blockquote bq-warning&quot;&gt;
          &lt;p class=&quot;bq-title&quot;&gt;Warning notification&lt;/p&gt;
          &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quibusdam dignissimos itaque harum illo!
            Quidem, corporis at quae tempore nisi impedit cupiditate perferendis nesciunt, ex dolores doloremque!
            Sit, rem, in?
          &lt;/p&gt;
        &lt;/blockquote&gt;
</code>
      </pre></div></div></div><!-- /.jhpiegosnippet -->
  </section>
  <!--Section: Code-->

  <!--Section: Live preview-->
  <section>

    <blockquote class="blockquote bq-success">
      <p class="bq-title">Success notification</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quibusdam dignissimos itaque harum illo!
        Quidem, corporis at quae tempore nisi impedit cupiditate perferendis nesciunt, ex dolores doloremque!
        Sit, rem, in?
      </p>
    </blockquote>

  </section>
  <!--Section: Live preview-->

  <!--Section: Code-->
  <section>
    <!-- jhpiegosnippet --><div class="docs-pills">  <div class="d-flex justify-content-between">    <ul class="nav md-pills pills-grey"><li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#jhpiego_5af5cc298f38f9d313479617db3de0ac" role="tab">HTML</a></li></ul></div><div class="tab-content"><div class="tab-pane fade active show light-grey-color" id="jhpiego_5af5cc298f38f9d313479617db3de0ac" role="tabpanel"><pre class="grey lighten-3 px-3 mb-0 line-numbers language-html" ><code>

        &lt;blockquote class=&quot;blockquote bq-success&quot;&gt;
          &lt;p class=&quot;bq-title&quot;&gt;Success notification&lt;/p&gt;
          &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quibusdam dignissimos itaque harum illo!
            Quidem, corporis at quae tempore nisi impedit cupiditate perferendis nesciunt, ex dolores doloremque!
            Sit, rem, in?
          &lt;/p&gt;
        &lt;/blockquote&gt;
</code>
      </pre></div></div></div><!-- /.jhpiegosnippet -->
  </section>
  <!--Section: Code-->

</section>
<!--/Section: notifications-->
<hr class="mt-4 mb-5">

<!--Section: -->
<section id="note">

  <!--Title-->
  <h2 class="section-heading mb-4">
    Note
  </h2>

  <!-- Description -->
  <p>
    Bootstrap notes help to emphasize important informations by modifying default bootstrap typography.
  </p>

  <!--Section: Live preview-->
  <section>

    <p class="note note-primary"><strong>Note primary:</strong> Lorem, ipsum dolor sit amet consectetur adipisicing
      elit. Cum doloremque officia laboriosam. Itaque ex obcaecati architecto! Qui necessitatibus delectus placeat illo
      rem id nisi consequatur esse, sint perspiciatis soluta porro?</p>

    <p class="note note-secondary"><strong>Note secondary:</strong> Lorem, ipsum dolor sit amet consectetur adipisicing
      elit. Cum doloremque officia laboriosam. Itaque ex obcaecati architecto! Qui necessitatibus delectus placeat illo
      rem id nisi consequatur esse, sint perspiciatis soluta porro?</p>

    <p class="note note-success"><strong>Note success:</strong> Lorem, ipsum dolor sit amet consectetur adipisicing
      elit. Cum doloremque officia laboriosam. Itaque ex obcaecati architecto! Qui necessitatibus delectus placeat illo
      rem id nisi consequatur esse, sint perspiciatis soluta porro?</p>

    <p class="note note-danger"><strong>Note danger:</strong> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
      Cum doloremque officia laboriosam. Itaque ex obcaecati architecto! Qui necessitatibus delectus placeat illo rem
      id nisi consequatur esse, sint perspiciatis soluta porro?</p>

    <p class="note note-warning"><strong>Note warning:</strong> Lorem, ipsum dolor sit amet consectetur adipisicing
      elit. Cum doloremque officia laboriosam. Itaque ex obcaecati architecto! Qui necessitatibus delectus placeat illo
      rem id nisi consequatur esse, sint perspiciatis soluta porro?</p>

    <p class="note note-info"><strong>Note info:</strong> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum
      doloremque officia laboriosam. Itaque ex obcaecati architecto! Qui necessitatibus delectus placeat illo rem id
      nisi consequatur esse, sint perspiciatis soluta porro?</p>

    <p class="note note-light"><strong>Note light:</strong> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
      Cum doloremque officia laboriosam. Itaque ex obcaecati architecto! Qui necessitatibus delectus placeat illo rem
      id nisi consequatur esse, sint perspiciatis soluta porro?</p>


  </section>
  <!--Section: Live preview-->

  <!--Section: Code-->
  <section>
    <!-- jhpiegosnippet --><div class="docs-pills">  <div class="d-flex justify-content-between">    <ul class="nav md-pills pills-grey"><li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#jhpiego_bca08068884af783e5842ec9cd0ba0f4" role="tab">HTML</a></li></ul></div><div class="tab-content"><div class="tab-pane fade active show light-grey-color" id="jhpiego_bca08068884af783e5842ec9cd0ba0f4" role="tabpanel"><pre class="grey lighten-3 px-3 mb-0 line-numbers language-html" ><code>

        &lt;p class=&quot;note note-primary&quot;&gt;&lt;strong&gt;Note primary:&lt;/strong&gt; Lorem, ipsum dolor sit amet consectetur adipisicing
          elit. Cum doloremque officia laboriosam. Itaque ex obcaecati architecto! Qui necessitatibus delectus placeat
          illo rem id nisi consequatur esse, sint perspiciatis soluta porro?&lt;/p&gt;

        &lt;p class=&quot;note note-secondary&quot;&gt;&lt;strong&gt;Note secondary:&lt;/strong&gt; Lorem, ipsum dolor sit amet consectetur
          adipisicing elit. Cum doloremque officia laboriosam. Itaque ex obcaecati architecto! Qui necessitatibus
          delectus placeat illo rem id nisi consequatur esse, sint perspiciatis soluta porro?&lt;/p&gt;

        &lt;p class=&quot;note note-success&quot;&gt;&lt;strong&gt;Note success:&lt;/strong&gt; Lorem, ipsum dolor sit amet consectetur adipisicing
          elit. Cum doloremque officia laboriosam. Itaque ex obcaecati architecto! Qui necessitatibus delectus placeat
          illo rem id nisi consequatur esse, sint perspiciatis soluta porro?&lt;/p&gt;

        &lt;p class=&quot;note note-danger&quot;&gt;&lt;strong&gt;Note danger:&lt;/strong&gt; Lorem, ipsum dolor sit amet consectetur adipisicing
          elit. Cum doloremque officia laboriosam. Itaque ex obcaecati architecto! Qui necessitatibus delectus placeat
          illo rem id nisi consequatur esse, sint perspiciatis soluta porro?&lt;/p&gt;

        &lt;p class=&quot;note note-warning&quot;&gt;&lt;strong&gt;Note warning:&lt;/strong&gt; Lorem, ipsum dolor sit amet consectetur adipisicing
          elit. Cum doloremque officia laboriosam. Itaque ex obcaecati architecto! Qui necessitatibus delectus placeat
          illo rem id nisi consequatur esse, sint perspiciatis soluta porro?&lt;/p&gt;

        &lt;p class=&quot;note note-info&quot;&gt;&lt;strong&gt;Note info:&lt;/strong&gt; Lorem, ipsum dolor sit amet consectetur adipisicing elit.
          Cum doloremque officia laboriosam. Itaque ex obcaecati architecto! Qui necessitatibus delectus placeat illo
          rem id nisi consequatur esse, sint perspiciatis soluta porro?&lt;/p&gt;

        &lt;p class=&quot;note note-light&quot;&gt;&lt;strong&gt;Note light:&lt;/strong&gt; Lorem, ipsum dolor sit amet consectetur adipisicing
          elit. Cum doloremque officia laboriosam. Itaque ex obcaecati architecto! Qui necessitatibus delectus placeat
          illo rem id nisi consequatur esse, sint perspiciatis soluta porro?&lt;/p&gt;

</code>
      </pre></div></div></div><!-- /.jhpiegosnippet -->
  </section>
  <!--Section: Code-->

</section>
<!--/Section: -->

<hr class="mt-4 mb-5">

<!--Section: lists-->
<section id="lists">

  <!--Title-->
  <h2 class="section-heading mb-4">
    Lists
  </h2>

  <h4 id="lists-unstyled"><strong>Unstyled</strong></h4>
  <!-- Description -->
  <p class="description my-4">
    Remove the default <code>list-style</code> and left margin on list items (immediate children only). <strong>This
      only applies to immediate children list items</strong>,
    meaning you will need to add the class for any nested lists as well.
  </p>

  <!--Section: Live preview-->
  <section class="section-preview">

    <ul class="list-unstyled">
      <li>Lorem ipsum dolor sit amet</li>
      <li>Consectetur adipiscing elit</li>
      <li>Integer molestie lorem at massa</li>
      <li>Facilisis in pretium nisl aliquet</li>
      <li>Nulla volutpat aliquam velit
        <ul>
          <li>Phasellus iaculis neque</li>
          <li>Purus sodales ultricies</li>
          <li>Vestibulum laoreet porttitor sem</li>
          <li>Ac tristique libero volutpat at</li>
        </ul>
      </li>
      <li>Faucibus porta lacus fringilla vel</li>
      <li>Aenean sit amet erat nunc</li>
      <li>Eget porttitor lorem</li>
    </ul>

  </section>
  <!--Section: Live preview-->

  <!--Section: Code-->
  <section>
    <!-- jhpiegosnippet --><div class="docs-pills">  <div class="d-flex justify-content-between">    <ul class="nav md-pills pills-grey"><li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#jhpiego_8223d5b00b7c11b1d1247208c0b1bb85" role="tab">HTML</a></li></ul></div><div class="tab-content"><div class="tab-pane fade active show light-grey-color" id="jhpiego_8223d5b00b7c11b1d1247208c0b1bb85" role="tabpanel"><pre class="grey lighten-3 px-3 mb-0 line-numbers language-html" ><code>

        &lt;ul class=&quot;list-unstyled&quot;&gt;
          &lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
          &lt;li&gt;Consectetur adipiscing elit&lt;/li&gt;
          &lt;li&gt;Integer molestie lorem at massa&lt;/li&gt;
          &lt;li&gt;Facilisis in pretium nisl aliquet&lt;/li&gt;
          &lt;li&gt;Nulla volutpat aliquam velit
            &lt;ul&gt;
              &lt;li&gt;Phasellus iaculis neque&lt;/li&gt;
              &lt;li&gt;Purus sodales ultricies&lt;/li&gt;
              &lt;li&gt;Vestibulum laoreet porttitor sem&lt;/li&gt;
              &lt;li&gt;Ac tristique libero volutpat at&lt;/li&gt;
            &lt;/ul&gt;
          &lt;/li&gt;
          &lt;li&gt;Faucibus porta lacus fringilla vel&lt;/li&gt;
          &lt;li&gt;Aenean sit amet erat nunc&lt;/li&gt;
          &lt;li&gt;Eget porttitor lorem&lt;/li&gt;
        &lt;/ul&gt;
</code>
      </pre></div></div></div><!-- /.jhpiegosnippet -->
  </section>
  <!--Section: Code-->


  <!--Subheading-->
  <h4 id="inline" class="mt-5"><strong>Inline</strong></h4>

  <!--Description-->
  <p class="description my-4">Remove a list’s bullets and apply some light <code>margin</code> with a combination of
    two classes, <code>.list-inline</code> and <code>.list-inline-item</code>.</p>

  <!--Section: Live preview-->
  <section class="section-preview">

    <ul class="list-inline">
      <li class="list-inline-item">Lorem ipsum</li>
      <li class="list-inline-item">Phasellus iaculis</li>
      <li class="list-inline-item">Nulla volutpat</li>
    </ul>

  </section>
  <!--Section: Live preview-->

  <!--Section: Code-->
  <section>

    <!-- jhpiegosnippet --><div class="docs-pills">  <div class="d-flex justify-content-between">    <ul class="nav md-pills pills-grey"><li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#jhpiego_b312cc2270597cbfecb54bc579754a36" role="tab">HTML</a></li></ul></div><div class="tab-content"><div class="tab-pane fade active show light-grey-color" id="jhpiego_b312cc2270597cbfecb54bc579754a36" role="tabpanel"><pre class="grey lighten-3 px-3 mb-0 line-numbers language-html" ><code>
        &lt;ul class=&quot;list-inline&quot;&gt;
          &lt;li class=&quot;list-inline-item&quot;&gt;Lorem ipsum&lt;/li&gt;
          &lt;li class=&quot;list-inline-item&quot;&gt;Phasellus iaculis&lt;/li&gt;
          &lt;li class=&quot;list-inline-item&quot;&gt;Nulla volutpat&lt;/li&gt;
        &lt;/ul&gt;
      </pre></code></div></div></div><!-- /.jhpiegosnippet -->

  </section>
  <!--Section: Code-->

  <!--Subheading-->
  <h4 id="description-list-alignment" class="mt-5"><strong>Description list alignment</strong></h4>

  <!--Description-->
  <p class="description my-4">Align terms and descriptions horizontally by using our grid system’s predefined classes
    (or semantic mixins). For
    longer terms, you can optionally add a <code>.text-truncate</code> class to truncate the text with an ellipsis.</p>

  <!--Section: Live preview-->
  <section class="section-preview">


    <dl class="row">
      <dt class="col-sm-3">Description lists</dt>
      <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

      <dt class="col-sm-3">Euismod</dt>
      <dd class="col-sm-9">Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
      <dd class="col-sm-9 offset-sm-3">Donec id elit non mi porta gravida at eget metus.</dd>

      <dt class="col-sm-3">Malesuada porta</dt>
      <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

      <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
      <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa
        justo sit amet
        risus.
      </dd>

      <dt class="col-sm-3">Nesting</dt>
      <dd class="col-sm-9">
        <dl class="row">
          <dt class="col-sm-4">Nested definition list</dt>
          <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
        </dl>
      </dd>
    </dl>
  </section>
  <!--Section: Live preview-->

  <!--Section: Code-->
  <section>

    <!-- jhpiegosnippet --><div class="docs-pills">  <div class="d-flex justify-content-between">    <ul class="nav md-pills pills-grey"><li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#jhpiego_622a5d58d7f57dc07dbc40695bfd8493" role="tab">HTML</a></li></ul></div><div class="tab-content"><div class="tab-pane fade active show light-grey-color" id="jhpiego_622a5d58d7f57dc07dbc40695bfd8493" role="tabpanel"><pre class="grey lighten-3 px-3 mb-0 line-numbers language-html" ><code>

        &lt;dl class=&quot;row&quot;&gt;
          &lt;dt class=&quot;col-sm-3&quot;&gt;Description lists&lt;/dt&gt;
          &lt;dd class=&quot;col-sm-9&quot;&gt;A description list is perfect for defining terms.&lt;/dd&gt;

          &lt;dt class=&quot;col-sm-3&quot;&gt;Euismod&lt;/dt&gt;
          &lt;dd class=&quot;col-sm-9&quot;&gt;Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.&lt;/dd&gt;
          &lt;dd class=&quot;col-sm-9 offset-sm-3&quot;&gt;Donec id elit non mi porta gravida at eget metus.&lt;/dd&gt;

          &lt;dt class=&quot;col-sm-3&quot;&gt;Malesuada porta&lt;/dt&gt;
          &lt;dd class=&quot;col-sm-9&quot;&gt;Etiam porta sem malesuada magna mollis euismod.&lt;/dd&gt;

          &lt;dt class=&quot;col-sm-3 text-truncate&quot;&gt;Truncated term is truncated&lt;/dt&gt;
          &lt;dd class=&quot;col-sm-9&quot;&gt;Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
            massa justo sit amet
            risus.
          &lt;/dd&gt;

          &lt;dt class=&quot;col-sm-3&quot;&gt;Nesting&lt;/dt&gt;
          &lt;dd class=&quot;col-sm-9&quot;&gt;
            &lt;dl class=&quot;row&quot;&gt;
              &lt;dt class=&quot;col-sm-4&quot;&gt;Nested definition list&lt;/dt&gt;
              &lt;dd class=&quot;col-sm-8&quot;&gt;Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.&lt;/dd&gt;
            &lt;/dl&gt;
          &lt;/dd&gt;
        &lt;/dl&gt;
        </code>
      </pre></div></div></div><!-- /.jhpiegosnippet -->

  </section>
  <!--Section: Code-->

</section>
<!--/Section: lists-->

<hr class="mt-4 mb-5">

<!--Section: Responsive typography-->
<section id="responsive-typography">

  <!--Title-->
  <h2 class="section-heading mb-4">
    Responsive typography
  </h2>

  <!-- Description -->
  <p><em>Responsive typography</em> refers to scaling text and components by simply adjusting the root element’s <code>font-size</code>
    within a series of media queries.
  </p>

  <p>Here’s an example of it in practice. Choose whatever <code>font-size</code>s and media queries you wish.</p>

  <!--Section: Code-->
  <section>
    <!-- jhpiegosnippet --><div class="docs-pills">  <div class="d-flex justify-content-between">    <ul class="nav md-pills pills-grey"><li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#jhpiego_45c0a6cc87ec7c292772cee54924dc9e" role="tab">CSS</a></li></ul></div><div class="tab-content"><div class="tab-pane fade active show light-grey-color" id="jhpiego_45c0a6cc87ec7c292772cee54924dc9e" role="tabpanel"><pre class="grey lighten-3 px-3 mb-0 line-numbers language-css" ><code>

        html {
        font-size: 1rem;
        }

        @include media-breakpoint-up(sm) {
        html {
        font-size: 1.2rem;
        }
        }

        @include media-breakpoint-up(md) {
        html {
        font-size: 1.4rem;
        }
        }

        @include media-breakpoint-up(lg) {
        html {
        font-size: 1.6rem;
        }
        }
</code>
      </pre></div></div></div><!-- /.jhpiegosnippet -->
  </section>
  <!--Section: Code-->

</section>
<!--/Section: Responsive typography-->

<hr class="mt-4 mb-5">


</secion>
 <!--Section: Docs content-->


                    
                    </div>
            
            
            </section>
        
        
        </div>
                      
    </main>
    <!--Main Layout-->
    
    
    
    
        
<?php  get_footer(); ?>