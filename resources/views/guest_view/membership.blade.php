<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Medium Navbar</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
      background: #fff;
      color: #1a1a1a;
    }

    /* ── Top Navbar ── */
    .nav {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 12px 24px;
      border-bottom: 1px solid #e8e8e8;
      background: #fff;
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .nav-left {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    .nav-logo {
      font-family: Georgia, 'Times New Roman', serif;
      font-size: 26px;
      font-weight: 500;
      color: #1a1a1a;
      letter-spacing: -0.5px;
      text-decoration: none;
    }

    .nav-search {
      display: flex;
      align-items: center;
      gap: 8px;
      background: #f2f2f2;
      border: 1px solid #e8e8e8;
      border-radius: 100px;
      padding: 7px 14px;
      cursor: pointer;
      transition: border-color 0.15s;
    }

    .nav-search:hover { border-color: #aaa; }

    .nav-search i { font-size: 16px; color: #6b6b6b; }

    .nav-search span { font-size: 14px; color: #6b6b6b; }

    .nav-right {
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .nav-link {
      font-size: 14px;
      color: #6b6b6b;
      text-decoration: none;
      padding: 6px 10px;
      border-radius: 8px;
      transition: color 0.15s, background 0.15s;
      white-space: nowrap;
    }

    .nav-link:hover { color: #1a1a1a; background: #f2f2f2; }

    .btn-subscribe {
      font-size: 13px;
      font-weight: 500;
      color: #fff;
      background: #1a1a1a;
      border: none;
      border-radius: 100px;
      padding: 8px 18px;
      cursor: pointer;
      transition: opacity 0.15s;
    }

    .btn-subscribe:hover { opacity: 0.75; }

    .divider {
      width: 1px;
      height: 20px;
      background: #e8e8e8;
      margin: 0 4px;
    }

    /* ── Signed-in Write Button ── */
    .btn-write {
      display: flex;
      align-items: center;
      gap: 6px;
      font-size: 14px;
      color: #6b6b6b;
      background: none;
      border: none;
      cursor: pointer;
      padding: 6px 10px;
      border-radius: 8px;
      transition: color 0.15s, background 0.15s;
    }

    .btn-write:hover { color: #1a1a1a; background: #f2f2f2; }

    /* ── Avatar ── */
    .avatar {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      background: #dbeafe;
      color: #1d4ed8;
      font-size: 13px;
      font-weight: 500;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      border: 1px solid #e8e8e8;
      margin-left: 4px;
    }

    /* ── Topic Tabs ── */
    .tabs {
      display: flex;
      gap: 4px;
      padding: 0 24px;
      border-bottom: 1px solid #e8e8e8;
      background: #fff;
      overflow-x: auto;
      scrollbar-width: none;
    }

    .tabs::-webkit-scrollbar { display: none; }

    .tab {
      font-size: 14px;
      padding: 10px 12px;
      color: #6b6b6b;
      cursor: pointer;
      border-bottom: 2px solid transparent;
      transition: color 0.15s;
      white-space: nowrap;
    }

    .tab:hover { color: #1a1a1a; }

    .tab.active {
      color: #1a1a1a;
      border-bottom-color: #1a1a1a;
    }

    /* ── Demo Feed ── */
    .feed {
      max-width: 740px;
      margin: 0 auto;
      padding: 0 24px;
    }

    .post {
      padding: 28px 0;
      border-bottom: 1px solid #e8e8e8;
      display: flex;
      gap: 20px;
      align-items: flex-start;
    }

    .post-body { flex: 1; }

    .post-meta {
      display: flex;
      align-items: center;
      gap: 8px;
      margin-bottom: 10px;
    }

    .post-author-avatar {
      width: 24px;
      height: 24px;
      border-radius: 50%;
      background: #f0fdf4;
      border: 1px solid #e8e8e8;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 11px;
      font-weight: 500;
      color: #166534;
    }

    .post-author { font-size: 13px; font-weight: 500; color: #1a1a1a; }

    .post-date { font-size: 13px; color: #6b6b6b; }

    .post-title {
      font-family: Georgia, 'Times New Roman', serif;
      font-size: 18px;
      font-weight: 700;
      color: #1a1a1a;
      margin-bottom: 6px;
      line-height: 1.35;
    }

    .post-subtitle {
      font-size: 14px;
      color: #6b6b6b;
      line-height: 1.55;
      margin-bottom: 12px;
    }

    .post-footer {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .post-tag {
      font-size: 12px;
      background: #f2f2f2;
      color: #1a1a1a;
      padding: 4px 10px;
      border-radius: 100px;
    }

    .post-read { font-size: 12px; color: #6b6b6b; }

    .post-thumb {
      width: 112px;
      height: 80px;
      border-radius: 4px;
      background: #f2f2f2;
      flex-shrink: 0;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .post-thumb i { font-size: 24px; color: #aaa; }
  </style>
</head>
<body>

  <!-- ── Navbar ── -->
  <nav class="nav">
    <div class="nav-left">
      <a href="#" class="nav-logo">Medium</a>
      <div class="nav-search">
        <i class="ti ti-search" aria-hidden="true"></i>
        <span>Search</span>
      </div>
    </div>
    <div class="nav-right">
      <a href="#" class="nav-link">Our story</a>
      <a href="#" class="nav-link">Membership</a>
      <div class="divider"></div>
      <a href="#" class="nav-link">Sign in</a>
      <button class="btn-subscribe">Get started</button>

      <!-- Uncomment for signed-in state:
      <button class="btn-write">
        <i class="ti ti-edit" aria-hidden="true"></i>
        Write
      </button>
      <div class="avatar">SC</div>
      -->
    </div>
  </nav>

  <!-- ── Topic Tabs ── -->
  <div class="tabs">
    <div class="tab active">For you</div>
    <div class="tab">Following</div>
    <div class="tab">Featured</div>
    <div class="tab">Design</div>
    <div class="tab">Technology</div>
    <div class="tab">Programming</div>
    <div class="tab">Science</div>
    <div class="tab">Self-improvement</div>
  </div>

  <!-- ── Feed ── -->
  <main class="feed">
    <article class="post">
      <div class="post-body">
        <div class="post-meta">
          <div class="post-author-avatar">SC</div>
          <span class="post-author">Sarah Chen</span>
          <span class="post-date">· Jun 10</span>
        </div>
        <div class="post-title">The quiet revolution in how we build software</div>
        <div class="post-subtitle">What nobody tells you about shipping products that actually last in a world that moves too fast.</div>
        <div class="post-footer">
          <span class="post-tag">Engineering</span>
          <span class="post-read">5 min read</span>
        </div>
      </div>
      <div class="post-thumb">
        <i class="ti ti-photo" aria-hidden="true"></i>
      </div>
    </article>

    <article class="post">
      <div class="post-body">
        <div class="post-meta">
          <div class="post-author-avatar">AM</div>
          <span class="post-author">Arjun Mehta</span>
          <span class="post-date">· Jun 9</span>
        </div>
        <div class="post-title">Design systems aren't about components</div>
        <div class="post-subtitle">They're about decisions — and the culture that makes them stick across teams and time.</div>
        <div class="post-footer">
          <span class="post-tag">Design</span>
          <span class="post-read">3 min read</span>
        </div>
      </div>
      <div class="post-thumb">
        <i class="ti ti-photo" aria-hidden="true"></i>
      </div>
    </article>
  </main>

  <script>
    // Active tab switching
    document.querySelectorAll('.tab').forEach(tab => {
      tab.addEventListener('click', () => {
        document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
        tab.classList.add('active');
      });
    });
  </script>

</body>
</html>
