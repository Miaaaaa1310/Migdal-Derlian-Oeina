<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>CV - Migdal Derlian Oeina</title>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root{
            --left-bg: #4e5458ff;
            --accent: #48a9f8;
            --muted: #777;
            --line: #e0e0e0;
            --text-dark: #222;
            --card-bg: #e5ceceff;
            --highlight-gray: #ecc1c1ff;
            --sidebar-hover: rgba(10, 9, 9, 0.06);
        }
        html,body{height:100%;margin:0;font-family:'Poppins',sans-serif;background:#f6f6f6;color:var(--text-dark);}

        .cv-container{
            max-width:1000px;margin:30px auto;box-shadow:0 8px 30px rgba(0,0,0,0.08);display:grid;grid-template-columns:360px 1fr;background:var(--card-bg);overflow:hidden;
        }

        /* SIDEBAR */
        .sidebar{background:var(--left-bg);color:#fff;padding:30px;box-sizing:border-box;position:relative;}
        .profile-photo{width:100%;height:320px;overflow:hidden;border-radius:2px;margin-bottom:18px;}
        .profile-photo img{width:100%;height:100%;object-fit:cover;display:block;transition:transform .35s ease,box-shadow .35s ease;}
        .profile-photo img:hover{transform:scale(1.06);box-shadow:0 12px 30px rgba(0,0,0,0.25);}

        .contact-title,.expertise-title,.language-title{font-weight:700;letter-spacing:1px;margin-top:12px;margin-bottom:12px;}
        .divider{height:2px;background:rgba(255,255,255,0.08);margin:10px 0 18px;}
        .contact-item{display:flex;gap:12px;align-items:flex-start;margin-bottom:10px;font-size:14px;color:rgba(255,255,255,0.95);padding:8px;border-radius:6px;transition:transform .2s ease,box-shadow .2s ease,background .2s ease;}
        .contact-item small{display:block;color:rgba(255,255,255,0.7);font-size:13px}

        .skill-row{display:flex;justify-content:space-between;align-items:center;margin:10px 0;gap:12px;padding:8px;border-radius:6px;transition:transform .2s ease,box-shadow .2s ease,background .2s ease;}
        .skill-name{font-size:14px;color:#fff;flex:1}
        .skill-bar{width:130px;height:8px;background:rgba(255,255,255,0.12);border-radius:8px;overflow:hidden;flex-shrink:0;}
        .skill-bar > i{display:block;height:100%;background:var(--accent);width:50%;border-radius:8px;}

        /* MAIN CONTENT */
        .main{padding:40px 45px;box-sizing:border-box;}
        .header-right{display:flex;align-items:flex-start;gap:20px;margin-bottom:12px;}
        .name{font-size:40px;font-weight:800;margin:0;line-height:1;}
        .title{font-size:18px;font-weight:600;color:var(--muted);margin-top:6px;}
        .about{margin-top:14px;color:#444;max-width:820px;font-size:15px;line-height:1.5;}

        section.section{margin-top:30px;}
        section.section h3{font-size:16px;text-transform:uppercase;letter-spacing:1.4px;margin:0 0 12px 0;padding-bottom:10px;border-bottom:3px solid var(--line);}

        /* Entries (main area) */
        .entry{display:flex;gap:20px;padding:14px 10px;align-items:flex-start;border-radius:6px;transition:transform .18s ease,box-shadow .18s ease,background .18s ease;}
        .entry .time{width:120px;color:var(--muted);font-size:13px;font-weight:600;}
        .entry .detail{flex:1;}
        .entry .detail h4{margin:0;font-size:15px;font-weight:700;}
        .entry .detail p{margin:6px 0 0 0;color:#555;font-size:14px;line-height:1.45;}

        /* Skills in main */
        .skill-list{display:flex;flex-direction:column;gap:12px;margin-top:8px;}
        .skill-item{display:flex;align-items:center;gap:12px;padding:8px;border-radius:6px;transition:transform .18s ease,box-shadow .18s ease,background .18s ease;}
        .skill-label{width:160px;font-weight:600;color:#333;font-size:14px}
        .skill-meter{height:10px;width:100%;background:var(--line);border-radius:10px;overflow:hidden;}
        .skill-meter > span{display:block;height:100%;background:var(--accent);width:50%;}

        /* HOVER EFFECTS: hanya zoom, shadow, dan warna agak abu-abu */
        /* Untuk item di area utama (putih) */
        .main .entry:hover,
        .main .skill-item:hover,
        .main .entry:focus,
        .main .skill-item:focus {
            transform: scale(1.01);
            box-shadow: 0 10px 28px rgba(0,0,0,0.07);
            background: var(--highlight-gray);
        }

        /* Untuk item di sidebar (dark) — tetap memberikan highlight subtle */
        .sidebar .contact-item:hover,
        .sidebar .skill-row:hover {
            transform: scale(1.01);
            box-shadow: 0 8px 22px rgba(0,0,0,0.12);
            background: var(--sidebar-hover);
        }

        /* pointer on hover for clarity */
        .entry, .skill-item, .contact-item, .skill-row { cursor:default; }
        .main .entry, .main .skill-item { cursor:pointer; }
        .sidebar .contact-item, .sidebar .skill-row { cursor:pointer; }

        @media (max-width:880px){
            .cv-container{grid-template-columns:1fr;margin:12px}
            .sidebar{order:2}
            .main{order:1;padding:22px}
            .profile-photo{height:220px}
        }
    </style>

    @stack('styles')
</head>
<body>
    @include('partials.navbar')

    <div class="cv-container">
        @yield('content')
    </div>

    @include('partials.footer')

    @stack('scripts')
</body>
</html>