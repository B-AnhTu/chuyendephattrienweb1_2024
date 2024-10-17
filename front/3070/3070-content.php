<span?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3070">
<div class="container">
  <div class="row">
    <nav class="col-md-3 d-block">
      <div class="position-sticky sidebar">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Call Center</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Dedicated Server</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">PBX/SIP Trunking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">VFAX</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">VOIP Analytics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">VOIP App</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">VOIP Connect</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">VOIP Drive</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">VOIP Office</a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-9 px-md-4 content-container">
      <h2>Lorem Ipsum Dolor Sit Amet</h2>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos nihil atque eaque, nisi fugiat, debitis, dolor accusamus est nemo ex illo laboriosam. Quas magni dignissimos quidem nobis assumenda tenetur omnis doloremque aperiam quia, officiis fuga beatae velit adipisci, unde voluptatem ratione, quod obcaecati ex rem nihil repellat laborum dolores! Exercitationem!</p>
      <h2>Lorem Ipsum Dolor Sit Amet</h2>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos nihil atque eaque, nisi fugiat, debitis, dolor accusamus est nemo ex illo laboriosam. Quas magni dignissimos quidem nobis assumenda tenetur omnis doloremque aperiam quia, officiis fuga beatae velit adipisci, unde voluptatem ratione, quod obcaecati ex rem nihil repellat laborum dolores! Exercitationem!</p>
      <h2>Lorem Ipsum Dolor Sit Amet</h2>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos nihil atque eaque, nisi fugiat, debitis, dolor accusamus est nemo ex illo laboriosam. Quas magni dignissimos quidem nobis assumenda tenetur omnis doloremque aperiam quia, officiis fuga beatae velit adipisci, unde voluptatem ratione, quod obcaecati ex rem nihil repellat laborum dolores! Exercitationem!</p>
      <h2>Lorem Ipsum Dolor Sit Amet</h2>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos nihil atque eaque, nisi fugiat, debitis, dolor accusamus est nemo ex illo laboriosam. Quas magni dignissimos quidem nobis assumenda tenetur omnis doloremque aperiam quia, officiis fuga beatae velit adipisci, unde voluptatem ratione, quod obcaecati ex rem nihil repellat laborum dolores! Exercitationem!</p>
    </main>
  </div>
</div>

</div>