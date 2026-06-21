<?php
// Demo Data
$student = [
    'name' => 'Adaeze Okonkwo',
    'matric' => '21/25/0088',
    'department' => 'Law',
    'avatar_initials' => 'AO',
];

$saved_agents = [
    ['id' => 'AGT-0012', 'name' => 'Chioma Okafor', 'matric' => '20/25/0134', 'department' => 'Estate Management', 'area' => 'Campus Gate', 'verified' => true, 'initials' => 'CO'],
    ['id' => 'AGT-0045', 'name' => 'Emeka Nwosu', 'matric' => '19/24/0056', 'department' => 'Civil Engineering', 'area' => 'Adeniran Ogunsanya', 'verified' => true, 'initials' => 'EN'],
    ['id' => 'AGT-0078', 'name' => 'Fatima Bello', 'matric' => '22/26/0023', 'department' => 'Mass Communication', 'area' => 'Oju-Ekun', 'verified' => false, 'initials' => 'FB'],
    ['id' => 'AGT-0091', 'name' => 'Tunde Adeyemi', 'matric' => '21/25/0099', 'department' => 'Computer Science', 'area' => 'Isale-Oyo', 'verified' => true, 'initials' => 'TA'],
    ['id' => 'AGT-0103', 'name' => 'Amina Yusuf', 'matric' => '23/27/0011', 'department' => 'Business Admin', 'area' => 'Campus Gate', 'verified' => false, 'initials' => 'AY'],
];

$saved_listings = [
    ['id' => 'LST-001', 'title' => '3 Bedroom in Camp', 'area' => 'Campus Gate', 'price' => '₦350,000/yr', 'rooms' => 3, 'agent' => 'Chioma Okafor', 'initials' => 'CO', 'color' => '#2E7D32'],
    ['id' => 'LST-002', 'title' => '2 Bedroom Self-Contain', 'area' => 'Adeniran Ogunsanya', 'price' => '₦200,000/yr', 'rooms' => 2, 'agent' => 'Emeka Nwosu', 'initials' => 'EN', 'color' => '#1565C0'],
    ['id' => 'LST-003', 'title' => 'Room & Parlour', 'area' => 'Oju-Ekun', 'price' => '₦120,000/yr', 'rooms' => 1, 'agent' => 'Fatima Bello', 'initials' => 'FB', 'color' => '#6A1B9A'],
    ['id' => 'LST-004', 'title' => '4 Bedroom Duplex', 'area' => 'Isale-Oyo', 'price' => '₦500,000/yr', 'rooms' => 4, 'agent' => 'Tunde Adeyemi', 'initials' => 'TA', 'color' => '#E65100'],
    ['id' => 'LST-005', 'title' => '1 Bedroom Flat', 'area' => 'Campus Gate', 'price' => '₦150,000/yr', 'rooms' => 1, 'agent' => 'Amina Yusuf', 'initials' => 'AY', 'color' => '#00695C'],
    ['id' => 'LST-006', 'title' => '3 Bedroom Bungalow', 'area' => 'Adeniran Ogunsanya', 'price' => '₦400,000/yr', 'rooms' => 3, 'agent' => 'Chioma Okafor', 'initials' => 'CO', 'color' => '#283593'],
    ['id' => 'LST-007', 'title' => '2 Bedroom Apartment', 'area' => 'Oju-Ekun', 'price' => '₦180,000/yr', 'rooms' => 2, 'agent' => 'Emeka Nwosu', 'initials' => 'EN', 'color' => '#558B2F'],
    ['id' => 'LST-008', 'title' => 'Studio Apartment', 'area' => 'Isale-Oyo', 'price' => '₦100,000/yr', 'rooms' => 1, 'agent' => 'Tunde Adeyemi', 'initials' => 'TA', 'color' => '#AD1457'],
];

$recent_verifications = [
    ['agent_id' => 'AGT-0012', 'name' => 'Chioma Okafor', 'status' => 'verified', 'date' => '2026-06-18'],
    ['agent_id' => 'AGT-0045', 'name' => 'Emeka Nwosu', 'status' => 'verified', 'date' => '2026-06-15'],
    ['agent_id' => 'AGT-0099', 'name' => 'Unknown Agent', 'status' => 'not_found', 'date' => '2026-06-12'],
];

$recent_reports = [
    ['id' => 'RPT-001', 'type' => 'Scam', 'agent' => 'Sunday Igwe', 'status' => 'Under Review', 'date' => '2026-06-10'],
    ['id' => 'RPT-002', 'type' => 'Overcharging', 'agent' => 'Bola Akindele', 'status' => 'Resolved', 'date' => '2026-05-28'],
];

$stats = [
    'saved_agents' => count($saved_agents),
    'saved_listings' => count($saved_listings),
    'reports_filed' => count($recent_reports),
    'verifications' => 12,
];

$recent_activity = [
    ['icon' => 'save', 'text' => 'You saved Agent Chioma Okafor', 'time' => '1 day ago'],
    ['icon' => 'view', 'text' => 'You viewed listing \'3 Bedroom in Camp\'', 'time' => '2 days ago'],
    ['icon' => 'verify', 'text' => 'You verified Agent Emeka Nwosu — Status: Verified', 'time' => '3 days ago'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard — funaabhub</title>
    <link rel="stylesheet" href="assets/style.css">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            background: #f0f2f5;
            color: #1a1a2e;
            min-height: 100vh;
        }

        /* ─── SIDEBAR ─── */
        .sidebar {
            position: fixed;
            left: 0; top: 0;
            width: 260px;
            height: 100vh;
            background: #0D3B13;
            color: #fff;
            display: flex;
            flex-direction: column;
            z-index: 100;
            transition: width .3s ease, transform .3s ease;
            overflow: hidden;
        }
        .sidebar.collapsed { width: 72px; }
        .sidebar.collapsed .sidebar-label,
        .sidebar.collapsed .nav-text,
        .sidebar.collapsed .student-name,
        .sidebar.collapsed .student-dept,
        .sidebar.collapsed .logo-text { display: none; }
        .sidebar.collapsed .nav-item { justify-content: center; padding: 12px 0; }
        .sidebar.collapsed .student-info { align-items: center; }
        .sidebar.collapsed .avatar { margin-right: 0; }
        .sidebar.collapsed .collapse-btn { right: 18px; }

        .sidebar-header {
            padding: 24px 20px 16px;
            display: flex;
            align-items: center;
            gap: 12px;
            border-bottom: 1px solid rgba(255,255,255,.12);
        }
        .logo-icon {
            width: 40px; height: 40px;
            background: #4CAF50;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 18px;
            color: #fff;
            flex-shrink: 0;
        }
        .logo-text { font-size: 18px; font-weight: 700; letter-spacing: -.3px; }
        .sidebar-label {
            font-size: 11px;
            background: rgba(255,255,255,.15);
            padding: 2px 8px;
            border-radius: 4px;
            margin-left: auto;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .5px;
        }

        .sidebar-nav { flex: 1; padding: 16px 0; overflow-y: auto; }
        .nav-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 11px 20px;
            color: rgba(255,255,255,.7);
            cursor: pointer;
            transition: all .2s;
            font-size: 14px;
            font-weight: 500;
            text-decoration: none;
            border-left: 3px solid transparent;
        }
        .nav-item:hover { background: rgba(255,255,255,.08); color: #fff; }
        .nav-item.active {
            background: rgba(255,255,255,.12);
            color: #fff;
            border-left-color: #4CAF50;
        }
        .nav-item svg { width: 20px; height: 20px; flex-shrink: 0; }

        .sidebar-footer {
            padding: 16px 20px;
            border-top: 1px solid rgba(255,255,255,.12);
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .avatar {
            width: 40px; height: 40px;
            border-radius: 50%;
            background: #4CAF50;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 14px;
            flex-shrink: 0;
        }
        .student-name { font-size: 14px; font-weight: 600; white-space: nowrap; }
        .student-dept { font-size: 12px; color: rgba(255,255,255,.6); white-space: nowrap; }

        .collapse-btn {
            position: absolute;
            top: 28px; right: -14px;
            width: 28px; height: 28px;
            background: #fff;
            border: 2px solid #0D3B13;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 101;
            transition: transform .3s;
            box-shadow: 0 2px 6px rgba(0,0,0,.15);
        }
        .sidebar.collapsed .collapse-btn { transform: rotate(180deg); }
        .collapse-btn svg { width: 14px; height: 14px; color: #0D3B13; }

        /* ─── MAIN ─── */
        .main { margin-left: 260px; transition: margin-left .3s ease; min-height: 100vh; }
        .sidebar.collapsed ~ .main { margin-left: 72px; }

        /* ─── HEADER ─── */
        .header {
            background: #fff;
            padding: 16px 32px;
            display: flex;
            align-items: center;
            gap: 16px;
            box-shadow: 0 1px 3px rgba(0,0,0,.06);
            position: sticky;
            top: 0;
            z-index: 50;
        }
        .header-title { font-size: 22px; font-weight: 700; color: #0D3B13; white-space: nowrap; }
        .header-search {
            margin-left: auto;
            display: flex;
            align-items: center;
            background: #f0f2f5;
            border-radius: 8px;
            padding: 8px 14px;
            gap: 8px;
            width: 280px;
        }
        .header-search input {
            border: none; background: none; outline: none;
            font-size: 14px; width: 100%; color: #1a1a2e;
        }
        .header-search svg { width: 18px; height: 18px; color: #888; flex-shrink: 0; }
        .header-actions { display: flex; align-items: center; gap: 12px; margin-left: 16px; }
        .icon-btn {
            width: 38px; height: 38px;
            border-radius: 8px;
            border: none;
            background: #f0f2f5;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            transition: background .2s;
        }
        .icon-btn:hover { background: #e0e2e5; }
        .icon-btn svg { width: 20px; height: 20px; color: #555; }
        .badge {
            position: absolute;
            top: 4px; right: 4px;
            width: 8px; height: 8px;
            background: #E53935;
            border-radius: 50%;
        }
        .profile-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 6px 12px;
            border-radius: 8px;
            border: none;
            background: #f0f2f5;
            cursor: pointer;
            font-size: 14px;
            font-weight: 600;
            color: #1a1a2e;
            position: relative;
        }
        .profile-btn:hover { background: #e0e2e5; }
        .profile-avatar {
            width: 32px; height: 32px;
            border-radius: 50%;
            background: #0D3B13;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: 700;
        }
        .dropdown {
            display: none;
            position: absolute;
            top: 110%; right: 0;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 8px 30px rgba(0,0,0,.12);
            min-width: 180px;
            z-index: 200;
            overflow: hidden;
        }
        .dropdown.show { display: block; }
        .dropdown-item {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 11px 16px;
            font-size: 14px;
            color: #333;
            cursor: pointer;
            transition: background .15s;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
        }
        .dropdown-item:hover { background: #f5f5f5; }
        .dropdown-item svg { width: 18px; height: 18px; color: #666; }
        .dropdown-divider { height: 1px; background: #eee; margin: 4px 0; }

        /* ─── CONTENT ─── */
        .content { padding: 28px 32px; }
        .tab-content { display: none; }
        .tab-content.active { display: block; animation: fadeIn .3s ease; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(8px); } to { opacity: 1; transform: translateY(0); } }

        /* ─── STAT CARDS ─── */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 28px;
        }
        .stat-card {
            background: #fff;
            border-radius: 12px;
            padding: 22px;
            box-shadow: 0 1px 4px rgba(0,0,0,.05);
            display: flex;
            align-items: center;
            gap: 16px;
            transition: transform .2s, box-shadow .2s;
        }
        .stat-card:hover { transform: translateY(-2px); box-shadow: 0 4px 16px rgba(0,0,0,.08); }
        .stat-icon {
            width: 52px; height: 52px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        .stat-icon svg { width: 24px; height: 24px; }
        .stat-icon.green { background: #E8F5E9; color: #2E7D32; }
        .stat-icon.blue { background: #E3F2FD; color: #1565C0; }
        .stat-icon.orange { background: #FFF3E0; color: #E65100; }
        .stat-icon.purple { background: #F3E5F5; color: #6A1B9A; }
        .stat-value { font-size: 28px; font-weight: 800; color: #1a1a2e; line-height: 1; }
        .stat-label { font-size: 13px; color: #777; margin-top: 2px; }

        /* ─── SECTION CARD ─── */
        .section-card {
            background: #fff;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 1px 4px rgba(0,0,0,.05);
            margin-bottom: 24px;
        }
        .section-title {
            font-size: 16px;
            font-weight: 700;
            color: #0D3B13;
            margin-bottom: 18px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .section-title svg { width: 20px; height: 20px; }

        /* ─── QUICK VERIFY ─── */
        .verify-input-row {
            display: flex;
            gap: 10px;
            align-items: center;
        }
        .verify-input-row input {
            flex: 1;
            padding: 11px 16px;
            border: 2px solid #e0e2e5;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
            transition: border-color .2s;
        }
        .verify-input-row input:focus { border-color: #4CAF50; }

        /* ─── BUTTONS ─── */
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: all .2s;
            white-space: nowrap;
        }
        .btn-primary { background: #0D3B13; color: #fff; }
        .btn-primary:hover { background: #0A2E0F; }
        .btn-green { background: #2E7D32; color: #fff; }
        .btn-green:hover { background: #1B5E20; }
        .btn-outline {
            background: transparent;
            border: 2px solid #0D3B13;
            color: #0D3B13;
        }
        .btn-outline:hover { background: #0D3B13; color: #fff; }
        .btn-danger { background: #E53935; color: #fff; }
        .btn-danger:hover { background: #C62828; }
        .btn-sm { padding: 7px 14px; font-size: 13px; }
        .btn svg { width: 16px; height: 16px; }

        /* ─── ACTIVITY LIST ─── */
        .activity-list { display: flex; flex-direction: column; gap: 0; }
        .activity-item {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 14px 0;
            border-bottom: 1px solid #f0f0f0;
        }
        .activity-item:last-child { border-bottom: none; }
        .activity-icon {
            width: 38px; height: 38px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        .activity-icon svg { width: 18px; height: 18px; }
        .activity-icon.save { background: #E8F5E9; color: #2E7D32; }
        .activity-icon.view { background: #E3F2FD; color: #1565C0; }
        .activity-icon.verify { background: #FFF3E0; color: #E65100; }
        .activity-text { font-size: 14px; color: #333; flex: 1; }
        .activity-time { font-size: 12px; color: #999; white-space: nowrap; }

        /* ─── QUICK ACTIONS ─── */
        .quick-actions { display: flex; gap: 12px; flex-wrap: wrap; }
        .quick-action {
            flex: 1;
            min-width: 150px;
            padding: 16px;
            border-radius: 10px;
            text-align: center;
            cursor: pointer;
            transition: all .2s;
            font-weight: 600;
            font-size: 14px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
        }
        .quick-action:hover { transform: translateY(-2px); }
        .quick-action svg { width: 28px; height: 28px; }
        .qa-green { background: #E8F5E9; color: #2E7D32; }
        .qa-green:hover { background: #C8E6C9; }
        .qa-blue { background: #E3F2FD; color: #1565C0; }
        .qa-blue:hover { background: #BBDEFB; }
        .qa-red { background: #FFEBEE; color: #C62828; }
        .qa-red:hover { background: #FFCDD2; }

        /* ─── AGENT CARDS ─── */
        .agents-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }
        .agent-card {
            background: #fff;
            border-radius: 12px;
            padding: 22px;
            box-shadow: 0 1px 4px rgba(0,0,0,.05);
            transition: transform .2s, box-shadow .2s;
        }
        .agent-card:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(0,0,0,.08); }
        .agent-card-header { display: flex; align-items: center; gap: 14px; margin-bottom: 16px; }
        .agent-avatar {
            width: 54px; height: 54px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 18px;
            color: #fff;
            flex-shrink: 0;
        }
        .agent-card-name { font-size: 16px; font-weight: 700; color: #1a1a2e; }
        .agent-card-matric { font-size: 12px; color: #888; margin-top: 2px; }
        .agent-card-details { display: flex; flex-direction: column; gap: 8px; margin-bottom: 16px; }
        .agent-detail {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            color: #555;
        }
        .agent-detail svg { width: 16px; height: 16px; color: #999; flex-shrink: 0; }
        .verified-badge {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            background: #E8F5E9;
            color: #2E7D32;
            padding: 3px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }
        .verified-badge svg { width: 14px; height: 14px; }
        .unverified-badge {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            background: #FFF3E0;
            color: #E65100;
            padding: 3px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }
        .agent-card-id {
            font-size: 12px;
            color: #aaa;
            font-family: monospace;
            margin-bottom: 14px;
        }
        .agent-card-actions { display: flex; gap: 8px; }

        /* ─── FILTER BAR ─── */
        .filter-bar {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }
        .filter-bar select {
            padding: 9px 14px;
            border: 2px solid #e0e2e5;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
            background: #fff;
            cursor: pointer;
        }
        .filter-bar select:focus { border-color: #4CAF50; }

        /* ─── LISTING CARDS ─── */
        .listings-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }
        .listing-card {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 1px 4px rgba(0,0,0,.05);
            transition: transform .2s, box-shadow .2s;
        }
        .listing-card:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(0,0,0,.08); }
        .listing-img {
            height: 160px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-weight: 800;
            font-size: 28px;
            position: relative;
        }
        .listing-price {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background: rgba(0,0,0,.65);
            color: #fff;
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 700;
        }
        .listing-card-body { padding: 16px; }
        .listing-card-title { font-size: 16px; font-weight: 700; color: #1a1a2e; margin-bottom: 6px; }
        .listing-card-area {
            font-size: 13px;
            color: #777;
            display: flex;
            align-items: center;
            gap: 4px;
            margin-bottom: 12px;
        }
        .listing-card-area svg { width: 14px; height: 14px; }
        .listing-card-meta {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 14px;
        }
        .listing-rooms {
            font-size: 13px;
            color: #555;
            display: flex;
            align-items: center;
            gap: 4px;
        }
        .listing-rooms svg { width: 14px; height: 14px; }
        .listing-agent { font-size: 12px; color: #888; }
        .listing-card-actions { display: flex; gap: 8px; }

        /* ─── VERIFY TAB ─── */
        .verify-search {
            display: flex;
            gap: 12px;
            max-width: 500px;
            margin-bottom: 24px;
        }
        .verify-search input {
            flex: 1;
            padding: 12px 18px;
            border: 2px solid #e0e2e5;
            border-radius: 10px;
            font-size: 15px;
            outline: none;
            transition: border-color .2s;
        }
        .verify-search input:focus { border-color: #4CAF50; }

        .verify-result {
            display: none;
            border-radius: 12px;
            padding: 28px;
            margin-bottom: 28px;
            animation: slideUp .4s ease;
        }
        .verify-result.show { display: block; }
        .verify-result.success { background: #E8F5E9; border: 2px solid #4CAF50; }
        .verify-result.fail { background: #FFEBEE; border: 2px solid #E53935; }
        @keyframes slideUp { from { opacity: 0; transform: translateY(16px); } to { opacity: 1; transform: translateY(0); } }

        .verify-result-header {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 20px;
        }
        .verify-result-icon {
            width: 60px; height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        .verify-result.success .verify-result-icon { background: #4CAF50; color: #fff; }
        .verify-result.fail .verify-result-icon { background: #E53935; color: #fff; }
        .verify-result-icon svg { width: 32px; height: 32px; }
        .verify-result-title { font-size: 20px; font-weight: 800; }
        .verify-result.success .verify-result-title { color: #1B5E20; }
        .verify-result.fail .verify-result-title { color: #C62828; }

        .verify-agent-info {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            margin-bottom: 16px;
        }
        .verify-info-item { font-size: 14px; }
        .verify-info-label { color: #777; font-size: 12px; }
        .verify-info-value { font-weight: 600; color: #1a1a2e; }
        .verified-sug-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: #2E7D32;
            color: #fff;
            padding: 6px 14px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 700;
            margin-top: 8px;
        }
        .verified-sug-badge svg { width: 16px; height: 16px; }

        /* ─── REPORT TAB ─── */
        .report-options {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
        }
        .form-group { margin-bottom: 16px; }
        .form-group label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #555;
            margin-bottom: 6px;
        }
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 11px 14px;
            border: 2px solid #e0e2e5;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
            font-family: inherit;
            transition: border-color .2s;
        }
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus { border-color: #4CAF50; }
        .form-group textarea { resize: vertical; min-height: 100px; }

        /* ─── TABLE ─── */
        .table-wrapper { overflow-x: auto; }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table th {
            text-align: left;
            padding: 12px 14px;
            font-size: 12px;
            font-weight: 700;
            color: #888;
            text-transform: uppercase;
            letter-spacing: .5px;
            border-bottom: 2px solid #eee;
        }
        table td {
            padding: 12px 14px;
            font-size: 14px;
            color: #333;
            border-bottom: 1px solid #f0f0f0;
        }
        .status-badge {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }
        .status-badge.under-review { background: #FFF3E0; color: #E65100; }
        .status-badge.resolved { background: #E8F5E9; color: #2E7D32; }
        .status-badge.verified { background: #E8F5E9; color: #2E7D32; }
        .status-badge.not-found { background: #FFEBEE; color: #C62828; }

        /* ─── SETTINGS ─── */
        .settings-group { margin-bottom: 24px; }
        .settings-group-title {
            font-size: 15px;
            font-weight: 700;
            color: #0D3B13;
            margin-bottom: 14px;
            padding-bottom: 8px;
            border-bottom: 2px solid #E8F5E9;
        }
        .settings-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid #f0f0f0;
        }
        .settings-item-info { flex: 1; }
        .settings-item-label { font-size: 14px; font-weight: 600; color: #333; }
        .settings-item-desc { font-size: 12px; color: #888; margin-top: 2px; }
        .toggle {
            width: 48px; height: 26px;
            background: #ccc;
            border-radius: 13px;
            position: relative;
            cursor: pointer;
            transition: background .2s;
        }
        .toggle.on { background: #4CAF50; }
        .toggle::after {
            content: '';
            width: 22px; height: 22px;
            background: #fff;
            border-radius: 50%;
            position: absolute;
            top: 2px; left: 2px;
            transition: left .2s;
            box-shadow: 0 1px 3px rgba(0,0,0,.2);
        }
        .toggle.on::after { left: 24px; }

        /* ─── TOAST ─── */
        .toast {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: #0D3B13;
            color: #fff;
            padding: 14px 24px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 600;
            box-shadow: 0 6px 20px rgba(0,0,0,.2);
            transform: translateY(100px);
            opacity: 0;
            transition: all .3s ease;
            z-index: 500;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .toast.show { transform: translateY(0); opacity: 1; }
        .toast svg { width: 20px; height: 20px; }

        /* ─── EMPTY STATE ─── */
        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: #aaa;
        }
        .empty-state svg { width: 64px; height: 64px; margin-bottom: 16px; opacity: .4; }
        .empty-state p { font-size: 16px; }

        /* ─── TWO COL LAYOUT ─── */
        .two-col { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; }
        @media (max-width: 900px) {
            .two-col { grid-template-columns: 1fr; }
            .report-options { grid-template-columns: 1fr; }
        }

        /* ─── RESPONSIVE ─── */
        @media (max-width: 768px) {
            .sidebar { transform: translateX(-100%); width: 260px; }
            .sidebar.mobile-open { transform: translateX(0); }
            .main { margin-left: 0 !important; }
            .header { padding: 12px 16px; }
            .content { padding: 20px 16px; }
            .header-search { width: 160px; }
            .stats-grid { grid-template-columns: 1fr 1fr; }
        }
    </style>
</head>
<body>

<!-- ═══════ SIDEBAR ═══════ -->
<aside class="sidebar" id="sidebar">
    <div class="collapse-btn" onclick="toggleSidebar()">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M15 18l-6-6 6-6"/></svg>
    </div>
    <div class="sidebar-header">
        <div class="logo-icon">f</div>
        <div>
            <div class="logo-text">funaabhub</div>
        </div>
        <span class="sidebar-label">Student</span>
    </div>
    <nav class="sidebar-nav">
        <a class="nav-item active" data-tab="overview" onclick="switchTab('overview', this)">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg>
            <span class="nav-text">Overview</span>
        </a>
        <a class="nav-item" data-tab="agents" onclick="switchTab('agents', this)">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
            <span class="nav-text">Saved Agents</span>
        </a>
        <a class="nav-item" data-tab="listings" onclick="switchTab('listings', this)">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            <span class="nav-text">Saved Listings</span>
        </a>
        <a class="nav-item" data-tab="verify" onclick="switchTab('verify', this)">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
            <span class="nav-text">Verify Agent</span>
        </a>
        <a class="nav-item" data-tab="report" onclick="switchTab('report', this)">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"/><line x1="4" y1="22" x2="4" y2="15"/></svg>
            <span class="nav-text">Report Scam</span>
        </a>
        <a class="nav-item" data-tab="settings" onclick="switchTab('settings', this)">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-4 0v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83-2.83l.06-.06A1.65 1.65 0 004.68 15a1.65 1.65 0 00-1.51-1H3a2 2 0 010-4h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 012.83-2.83l.06.06A1.65 1.65 0 009 4.68a1.65 1.65 0 001-1.51V3a2 2 0 014 0v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 2.83l-.06.06A1.65 1.65 0 0019.4 9a1.65 1.65 0 001.51 1H21a2 2 0 010 4h-.09a1.65 1.65 0 00-1.51 1z"/></svg>
            <span class="nav-text">Settings</span>
        </a>
    </nav>
    <div class="sidebar-footer">
        <div class="avatar"><?= $student['avatar_initials'] ?></div>
        <div>
            <div class="student-name"><?= $student['name'] ?></div>
            <div class="student-dept"><?= $student['department'] ?></div>
        </div>
    </div>
</aside>

<!-- ═══════ MAIN ═══════ -->
<div class="main" id="main">
    <!-- HEADER -->
    <header class="header">
        <button class="icon-btn" onclick="document.getElementById('sidebar').classList.toggle('mobile-open')" style="display:none;" id="menuBtn">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
        </button>
        <h1 class="header-title">Student Dashboard</h1>
        <div class="header-search">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
            <input type="text" placeholder="Search agents, listings...">
        </div>
        <div class="header-actions">
            <button class="icon-btn" title="Notifications">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 01-3.46 0"/></svg>
                <span class="badge"></span>
            </button>
            <div style="position:relative;">
                <button class="profile-btn" onclick="toggleDropdown()">
                    <span class="profile-avatar"><?= $student['avatar_initials'] ?></span>
                    <?= explode(' ', $student['name'])[0] ?>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16"><polyline points="6 9 12 15 18 9"/></svg>
                </button>
                <div class="dropdown" id="profileDropdown">
                    <button class="dropdown-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        My Profile
                    </button>
                    <button class="dropdown-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-4 0v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83-2.83l.06-.06A1.65 1.65 0 004.68 15a1.65 1.65 0 00-1.51-1H3a2 2 0 010-4h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 012.83-2.83l.06.06A1.65 1.65 0 009 4.68a1.65 1.65 0 001-1.51V3a2 2 0 014 0v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 2.83l-.06.06A1.65 1.65 0 0019.4 9a1.65 1.65 0 001.51 1H21a2 2 0 010 4h-.09a1.65 1.65 0 00-1.51 1z"/></svg>
                        Settings
                    </button>
                    <div class="dropdown-divider"></div>
                    <button class="dropdown-item" style="color:#E53935;">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#E53935" stroke-width="2"><path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
                        Sign Out
                    </button>
                </div>
            </div>
        </div>
    </header>

    <div class="content">
        <!-- ═══════ OVERVIEW ═══════ -->
        <div class="tab-content active" id="tab-overview">
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon green">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                    </div>
                    <div>
                        <div class="stat-value"><?= $stats['saved_agents'] ?></div>
                        <div class="stat-label">Saved Agents</div>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon blue">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    </div>
                    <div>
                        <div class="stat-value"><?= $stats['saved_listings'] ?></div>
                        <div class="stat-label">Saved Listings</div>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon orange">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"/><line x1="4" y1="22" x2="4" y2="15"/></svg>
                    </div>
                    <div>
                        <div class="stat-value"><?= $stats['reports_filed'] ?></div>
                        <div class="stat-label">Reports Filed</div>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon purple">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
                    </div>
                    <div>
                        <div class="stat-value"><?= $stats['verifications'] ?></div>
                        <div class="stat-label">Verifications Done</div>
                    </div>
                </div>
            </div>

            <div class="two-col">
                <div>
                    <div class="section-card">
                        <div class="section-title">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
                            Quick Verify
                        </div>
                        <div class="verify-input-row">
                            <input type="text" id="quickVerifyInput" placeholder="Enter Agent ID (e.g. AGT-0012)">
                            <button class="btn btn-primary" onclick="quickVerify()">Verify Agent</button>
                        </div>
                        <div id="quickVerifyResult" style="margin-top:14px;"></div>
                    </div>

                    <div class="section-card">
                        <div class="section-title">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                            Recent Activity
                        </div>
                        <div class="activity-list">
                            <?php foreach ($recent_activity as $act): ?>
                            <div class="activity-item">
                                <div class="activity-icon <?= $act['icon'] ?>">
                                    <?php if ($act['icon'] === 'save'): ?>
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21l-7-5-7 5V5a2 2 0 012-2h10a2 2 0 012 2z"/></svg>
                                    <?php elseif ($act['icon'] === 'view'): ?>
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                                    <?php else: ?>
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
                                    <?php endif; ?>
                                </div>
                                <span class="activity-text"><?= $act['text'] ?></span>
                                <span class="activity-time"><?= $act['time'] ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="section-card">
                    <div class="section-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/></svg>
                        Quick Actions
                    </div>
                    <div class="quick-actions" style="flex-direction:column;">
                        <div class="quick-action qa-green" onclick="switchTab('agents', document.querySelector('[data-tab=agents]'))">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                            Find Agents
                        </div>
                        <div class="quick-action qa-blue" onclick="switchTab('listings', document.querySelector('[data-tab=listings]'))">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                            Browse Listings
                        </div>
                        <div class="quick-action qa-red" onclick="switchTab('report', document.querySelector('[data-tab=report]'))">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"/><line x1="4" y1="22" x2="4" y2="15"/></svg>
                            Report Scam
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ═══════ SAVED AGENTS ═══════ -->
        <div class="tab-content" id="tab-agents">
            <div class="filter-bar">
                <label style="font-weight:600;font-size:14px;color:#555;">Filter by Area:</label>
                <select id="agentAreaFilter" onchange="filterAgents()">
                    <option value="">All Areas</option>
                    <option value="Campus Gate">Campus Gate</option>
                    <option value="Adeniran Ogunsanya">Adeniran Ogunsanya</option>
                    <option value="Oju-Ekun">Oju-Ekun</option>
                    <option value="Isale-Oyo">Isale-Oyo</option>
                </select>
                <span style="margin-left:auto;font-size:13px;color:#888;" id="agentCount"><?= count($saved_agents) ?> agents</span>
            </div>
            <div class="agents-grid" id="agentsGrid">
                <?php foreach ($saved_agents as $agent): ?>
                <div class="agent-card" data-area="<?= $agent['area'] ?>">
                    <div class="agent-card-header">
                        <div class="agent-avatar" style="background:<?= $agent['verified'] ? '#2E7D32' : '#E65100' ?>"><?= $agent['initials'] ?></div>
                        <div>
                            <div class="agent-card-name"><?= $agent['name'] ?></div>
                            <div class="agent-card-matric">Matric: <?= $agent['matric'] ?></div>
                        </div>
                    </div>
                    <div class="agent-card-details">
                        <div class="agent-detail">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            <?= $agent['area'] ?>
                        </div>
                        <div class="agent-detail">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c0 1.66 3.58 3 8 3s8-1.34 8-3v-5"/></svg>
                            <?= $agent['department'] ?>
                        </div>
                    </div>
                    <div style="margin-bottom:12px;">
                        <?php if ($agent['verified']): ?>
                            <span class="verified-badge">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                Verified
                            </span>
                        <?php else: ?>
                            <span class="unverified-badge">Unverified</span>
                        <?php endif; ?>
                    </div>
                    <div class="agent-card-id">Agent ID: <?= $agent['id'] ?></div>
                    <div class="agent-card-actions">
                        <button class="btn btn-outline btn-sm" onclick="showToast('Viewing profile of <?= $agent['name'] ?>')">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                            View Profile
                        </button>
                        <button class="btn btn-sm" style="background:#FFEBEE;color:#C62828;" onclick="showToast('Removed <?= $agent['name'] ?> from saved')">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                            Remove
                        </button>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- ═══════ SAVED LISTINGS ═══════ -->
        <div class="tab-content" id="tab-listings">
            <div class="listings-grid">
                <?php foreach ($saved_listings as $listing): ?>
                <div class="listing-card">
                    <div class="listing-img" style="background:<?= $listing['color'] ?>">
                        <?= $listing['initials'] ?>
                        <span class="listing-price"><?= $listing['price'] ?></span>
                    </div>
                    <div class="listing-card-body">
                        <div class="listing-card-title"><?= $listing['title'] ?></div>
                        <div class="listing-card-area">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            <?= $listing['area'] ?>
                        </div>
                        <div class="listing-card-meta">
                            <span class="listing-rooms">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                                <?= $listing['rooms'] ?> Bedroom<?= $listing['rooms'] > 1 ? 's' : '' ?>
                            </span>
                            <span class="listing-agent">Agent: <?= $listing['agent'] ?></span>
                        </div>
                        <div class="listing-card-actions">
                            <button class="btn btn-outline btn-sm" onclick="showToast('Viewing details for <?= $listing['title'] ?>')">View Details</button>
                            <button class="btn btn-green btn-sm" onclick="showToast('Contacting agent <?= $listing['agent'] ?>')">Contact Agent</button>
                            <button class="btn btn-sm" style="background:#FFEBEE;color:#C62828;" onclick="showToast('Removed <?= $listing['title'] ?> from saved')">Remove</button>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- ═══════ VERIFY AGENT ═══════ -->
        <div class="tab-content" id="tab-verify">
            <div class="section-card">
                <div class="section-title">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                    Search Agent
                </div>
                <div class="verify-search">
                    <input type="text" id="verifyAgentInput" placeholder="Enter Agent Name or Agent ID (e.g. AGT-0012)">
                    <button class="btn btn-green" onclick="verifyAgent()">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
                        Verify
                    </button>
                </div>
                <div class="verify-result" id="verifyResult"></div>
            </div>

            <div class="section-card">
                <div class="section-title">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    Recent Verifications
                </div>
                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Agent ID</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($recent_verifications as $rv): ?>
                            <tr>
                                <td style="font-family:monospace;"><?= $rv['agent_id'] ?></td>
                                <td><?= $rv['name'] ?></td>
                                <td>
                                    <span class="status-badge <?= $rv['status'] === 'verified' ? 'verified' : 'not-found' ?>">
                                        <?= $rv['status'] === 'verified' ? 'Verified' : 'Not Found' ?>
                                    </span>
                                </td>
                                <td><?= $rv['date'] ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- ═══════ REPORT SCAM ═══════ -->
        <div class="tab-content" id="tab-report">
            <div class="report-options">
                <div class="section-card">
                    <div class="section-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"/><line x1="4" y1="22" x2="4" y2="15"/></svg>
                        Report an Agent
                    </div>
                    <form onsubmit="submitReport(event)">
                        <div class="form-group">
                            <label>Agent Name or ID</label>
                            <input type="text" placeholder="e.g. Sunday Igwe or AGT-0055" required>
                        </div>
                        <div class="form-group">
                            <label>Issue Type</label>
                            <select required>
                                <option value="">Select issue type...</option>
                                <option>Scam</option>
                                <option>Overcharging</option>
                                <option>Fake Listing</option>
                                <option>Extortion</option>
                                <option>No Response</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea placeholder="Provide details about the issue..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"/><line x1="4" y1="22" x2="4" y2="15"/></svg>
                            Submit Report
                        </button>
                    </form>
                </div>

                <div class="section-card">
                    <div class="section-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        Check Recent Reports
                    </div>
                    <div class="table-wrapper">
                        <table>
                            <thead>
                                <tr>
                                    <th>Report ID</th>
                                    <th>Type</th>
                                    <th>Agent</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($recent_reports as $report): ?>
                                <tr>
                                    <td style="font-family:monospace;"><?= $report['id'] ?></td>
                                    <td><?= $report['type'] ?></td>
                                    <td><?= $report['agent'] ?></td>
                                    <td>
                                        <span class="status-badge <?= $report['status'] === 'Resolved' ? 'resolved' : 'under-review' ?>">
                                            <?= $report['status'] ?>
                                        </span>
                                    </td>
                                    <td><?= $report['date'] ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- ═══════ SETTINGS ═══════ -->
        <div class="tab-content" id="tab-settings">
            <div class="section-card" style="max-width:680px;">
                <div class="settings-group">
                    <div class="settings-group-title">Notifications</div>
                    <div class="settings-item">
                        <div class="settings-item-info">
                            <div class="settings-item-label">Email Notifications</div>
                            <div class="settings-item-desc">Receive email updates about your saved listings and agents</div>
                        </div>
                        <div class="toggle on" onclick="this.classList.toggle('on')"></div>
                    </div>
                    <div class="settings-item">
                        <div class="settings-item-info">
                            <div class="settings-item-label">Report Status Updates</div>
                            <div class="settings-item-desc">Get notified when your report status changes</div>
                        </div>
                        <div class="toggle on" onclick="this.classList.toggle('on')"></div>
                    </div>
                    <div class="settings-item">
                        <div class="settings-item-info">
                            <div class="settings-item-label">New Listings in Your Area</div>
                            <div class="settings-item-desc">Get alerts for new listings in your preferred areas</div>
                        </div>
                        <div class="toggle" onclick="this.classList.toggle('on')"></div>
                    </div>
                </div>
                <div class="settings-group">
                    <div class="settings-group-title">Privacy</div>
                    <div class="settings-item">
                        <div class="settings-item-info">
                            <div class="settings-item-label">Profile Visibility</div>
                            <div class="settings-item-desc">Allow agents to see your profile when you contact them</div>
                        </div>
                        <div class="toggle on" onclick="this.classList.toggle('on')"></div>
                    </div>
                    <div class="settings-item">
                        <div class="settings-item-info">
                            <div class="settings-item-label">Show Matric Number</div>
                            <div class="settings-item-desc">Display your matric number to verified agents</div>
                        </div>
                        <div class="toggle" onclick="this.classList.toggle('on')"></div>
                    </div>
                </div>
                <div class="settings-group">
                    <div class="settings-group-title">Account</div>
                    <div class="settings-item">
                        <div class="settings-item-info">
                            <div class="settings-item-label">Change Password</div>
                            <div class="settings-item-desc">Update your account password</div>
                        </div>
                        <button class="btn btn-outline btn-sm">Change</button>
                    </div>
                    <div class="settings-item">
                        <div class="settings-item-info">
                            <div class="settings-item-label">Delete Account</div>
                            <div class="settings-item-desc">Permanently delete your account and all data</div>
                        </div>
                        <button class="btn btn-sm" style="background:#FFEBEE;color:#C62828;">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- TOAST -->
<div class="toast" id="toast">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
    <span id="toastText"></span>
</div>

<script>
// ─── SIDEBAR ───
function toggleSidebar() {
    document.getElementById('sidebar').classList.toggle('collapsed');
}

// ─── TABS ───
function switchTab(tabName, el) {
    document.querySelectorAll('.tab-content').forEach(t => t.classList.remove('active'));
    document.querySelectorAll('.nav-item').forEach(n => n.classList.remove('active'));
    document.getElementById('tab-' + tabName).classList.add('active');
    if (el) el.classList.add('active');
    // Close mobile sidebar
    document.getElementById('sidebar').classList.remove('mobile-open');
}

// ─── PROFILE DROPDOWN ───
function toggleDropdown() {
    document.getElementById('profileDropdown').classList.toggle('show');
}
document.addEventListener('click', function(e) {
    if (!e.target.closest('.profile-btn') && !e.target.closest('.dropdown')) {
        document.getElementById('profileDropdown').classList.remove('show');
    }
});

// ─── TOAST ───
function showToast(msg) {
    const toast = document.getElementById('toast');
    document.getElementById('toastText').textContent = msg;
    toast.classList.add('show');
    setTimeout(() => toast.classList.remove('show'), 3000);
}

// ─── FILTER AGENTS ───
function filterAgents() {
    const area = document.getElementById('agentAreaFilter').value;
    const cards = document.querySelectorAll('.agent-card');
    let count = 0;
    cards.forEach(card => {
        if (!area || card.dataset.area === area) {
            card.style.display = '';
            count++;
        } else {
            card.style.display = 'none';
        }
    });
    document.getElementById('agentCount').textContent = count + ' agent' + (count !== 1 ? 's' : '');
}

// ─── QUICK VERIFY (Overview) ───
function quickVerify() {
    const input = document.getElementById('quickVerifyInput').value.trim();
    const resultDiv = document.getElementById('quickVerifyResult');
    if (!input) { resultDiv.innerHTML = ''; return; }

    if (input === 'AGT-0012') {
        resultDiv.innerHTML = `
            <div style="background:#E8F5E9;border-radius:10px;padding:16px;display:flex;align-items:center;gap:14px;animation:slideUp .3s ease;">
                <div style="width:44px;height:44px;border-radius:50%;background:#2E7D32;color:#fff;display:flex;align-items:center;justify-content:center;font-weight:700;flex-shrink:0;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" width="22" height="22"><polyline points="20 6 9 17 4 12"/></svg>
                </div>
                <div>
                    <div style="font-weight:700;color:#1B5E20;">Agent Chioma Okafor — Verified</div>
                    <div style="font-size:13px;color:#2E7D32;">AGT-0012 · Campus Gate · Estate Management</div>
                </div>
            </div>`;
    } else {
        resultDiv.innerHTML = `
            <div style="background:#FFEBEE;border-radius:10px;padding:16px;display:flex;align-items:center;gap:14px;animation:slideUp .3s ease;">
                <div style="width:44px;height:44px;border-radius:50%;background:#E53935;color:#fff;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" width="22" height="22"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                </div>
                <div>
                    <div style="font-weight:700;color:#C62828;">Agent Not Found</div>
                    <div style="font-size:13px;color:#E53935;">No agent matches ID "${input}"</div>
                </div>
            </div>`;
    }
}

// ─── VERIFY AGENT (Full Tab) ───
function verifyAgent() {
    const input = document.getElementById('verifyAgentInput').value.trim();
    const resultDiv = document.getElementById('verifyResult');
    if (!input) { resultDiv.className = 'verify-result'; return; }

    resultDiv.classList.remove('show');

    setTimeout(() => {
        if (input === 'AGT-0012') {
            resultDiv.className = 'verify-result success show';
            resultDiv.innerHTML = `
                <div class="verify-result-header">
                    <div class="verify-result-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    <div class="verify-result-title">Agent Verified Successfully</div>
                </div>
                <div class="verify-agent-info">
                    <div class="verify-info-item">
                        <div class="verify-info-label">Agent Name</div>
                        <div class="verify-info-value">Chioma Okafor</div>
                    </div>
                    <div class="verify-info-item">
                        <div class="verify-info-label">Agent ID</div>
                        <div class="verify-info-value" style="font-family:monospace;">AGT-0012</div>
                    </div>
                    <div class="verify-info-item">
                        <div class="verify-info-label">Department</div>
                        <div class="verify-info-value">Estate Management</div>
                    </div>
                    <div class="verify-info-item">
                        <div class="verify-info-label">Area</div>
                        <div class="verify-info-value">Campus Gate</div>
                    </div>
                </div>
                <div class="verified-sug-badge">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
                    Verified by SUG — Federal University of Agriculture, Abeokuta
                </div>`;
        } else {
            resultDiv.className = 'verify-result fail show';
            resultDiv.innerHTML = `
                <div class="verify-result-header">
                    <div class="verify-result-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                    </div>
                    <div class="verify-result-title">Agent Not Found</div>
                </div>
                <p style="color:#C62828;font-size:15px;margin-top:4px;">No agent with ID or name "<strong>${input}</strong>" was found in our verified database.</p>
                <p style="color:#888;font-size:13px;margin-top:10px;">Please double-check the Agent ID and try again. If you believe this is an error, <a href="#" onclick="switchTab('report', document.querySelector('[data-tab=report]'));return false;" style="color:#C62828;font-weight:600;">report the agent</a>.</p>`;
        }
    }, 400);
}

// ─── SUBMIT REPORT ───
function submitReport(e) {
    e.preventDefault();
    showToast('Report submitted successfully! We will review it shortly.');
    e.target.reset();
}

// ─── MOBILE MENU ───
function checkMobile() {
    const btn = document.getElementById('menuBtn');
    if (window.innerWidth <= 768) {
        btn.style.display = 'flex';
    } else {
        btn.style.display = 'none';
        document.getElementById('sidebar').classList.remove('mobile-open');
    }
}
window.addEventListener('resize', checkMobile);
checkMobile();
</script>
</body>
</html>
