<?php
// Demo data
$agent = [
    'name' => 'Adebayo Johnson',
    'id' => 'AGT-0012',
    'matric' => '20/25/0001',
    'department' => 'Computer Science',
    'phone' => '08012345678',
    'whatsapp' => '08012345678',
    'area' => 'Camp',
    'avatar' => 'AJ',
    'member_since' => 'January 2026',
    'last_active' => 'Just now',
    'verified' => true,
    'caretaker_name' => 'Mr. Olaniyi',
    'caretaker_office' => 'Faculty of Engineering'
];

$stats = [
    ['icon' => 'listings', 'value' => 12, 'label' => 'Total Listings', 'change' => '+2', 'positive' => true],
    ['icon' => 'active', 'value' => 8, 'label' => 'Active Listings', 'change' => '+1', 'positive' => true],
    ['icon' => 'views', 'value' => 234, 'label' => 'Profile Views', 'change' => '+12%', 'positive' => true],
    ['icon' => 'messages', 'value' => 5, 'label' => 'Messages', 'change' => '+2', 'positive' => true]
];

$activities = [
    ['text' => 'Your listing \'3 Bedroom Flat in Camp\' was viewed 12 times', 'time' => '2 hours ago', 'type' => 'view'],
    ['text' => 'New message from Student', 'time' => '5 hours ago', 'type' => 'message'],
    ['text' => 'Listing \'Room in Harmony\' was favorited by 3 students', 'time' => '1 day ago', 'type' => 'favorite'],
    ['text' => 'Profile was viewed 45 times this week', 'time' => '2 days ago', 'type' => 'view']
];

$listings = [
    [
        'id' => 1,
        'title' => '3 Bedroom Flat in Camp',
        'area' => 'Camp',
        'price' => 350000,
        'rooms' => 3,
        'bathrooms' => 2,
        'status' => 'Active',
        'views' => 89,
        'photo' => '🏠',
        'description' => 'Spacious 3 bedroom flat with constant water supply and 24/7 power. Close to campus gate.'
    ],
    [
        'id' => 2,
        'title' => 'Room in Harmony Estate',
        'area' => 'Harmony',
        'price' => 120000,
        'rooms' => 1,
        'bathrooms' => 1,
        'status' => 'Active',
        'views' => 67,
        'photo' => '🏠',
        'description' => 'Self-contained room in a serene environment. Perfect for students.'
    ],
    [
        'id' => 3,
        'title' => '2 Bedroom Bungalow',
        'area' => 'Gateway',
        'price' => 250000,
        'rooms' => 2,
        'bathrooms' => 2,
        'status' => 'Pending',
        'views' => 45,
        'photo' => '🏡',
        'description' => 'Beautiful bungalow with parking space and generator backup.'
    ],
    [
        'id' => 4,
        'title' => 'Room Self-Cont. in Aluta',
        'area' => 'Aluta',
        'price' => 80000,
        'rooms' => 1,
        'bathrooms' => 1,
        'status' => 'Active',
        'views' => 23,
        'photo' => '🏠',
        'description' => 'Affordable self-contained room near market. Good for students on budget.'
    ],
    [
        'id' => 5,
        'title' => 'Studio Apartment Camp Extension',
        'area' => 'Camp Extension',
        'price' => 150000,
        'rooms' => 1,
        'bathrooms' => 1,
        'status' => 'Active',
        'views' => 10,
        'photo' => '🏢',
        'description' => 'Modern studio apartment with kitchen and bathroom. All rooms en-suite.'
    ],
    [
        'id' => 6,
        'title' => '4 Bedroom Duplex Harmony',
        'area' => 'Harmony',
        'price' => 500000,
        'rooms' => 4,
        'bathrooms' => 3,
        'status' => 'Sold',
        'views' => 156,
        'photo' => '🏡',
        'description' => 'Luxury duplex with boy\'s quarters. Perfect for large families.'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent Dashboard - FUNAABHUB</title>
    <link rel="stylesheet" href="assets/style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
            color: #333;
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 260px;
            height: 100vh;
            background: #0D3B13;
            color: #fff;
            overflow-y: auto;
            transition: width 0.3s ease;
            z-index: 1000;
        }

        .sidebar.collapsed {
            width: 70px;
        }

        .sidebar-header {
            padding: 20px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .sidebar-logo {
            font-size: 24px;
            font-weight: bold;
            color: #4CAF50;
        }

        .sidebar.collapsed .sidebar-logo span {
            display: none;
        }

        .sidebar-nav {
            padding: 20px 0;
            flex: 1;
        }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 20px;
            color: rgba(255,255,255,0.7);
            cursor: pointer;
            transition: all 0.3s;
            border-left: 3px solid transparent;
        }

        .nav-item:hover {
            background: rgba(255,255,255,0.1);
            color: #fff;
        }

        .nav-item.active {
            background: rgba(76, 175, 80, 0.2);
            color: #4CAF50;
            border-left-color: #4CAF50;
        }

        .nav-item svg {
            width: 20px;
            height: 20px;
            flex-shrink: 0;
        }

        .nav-item span {
            white-space: nowrap;
        }

        .sidebar.collapsed .nav-item span {
            display: none;
        }

        .sidebar-footer {
            padding: 20px;
            border-top: 1px solid rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .agent-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #4CAF50;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 14px;
            flex-shrink: 0;
        }

        .agent-info {
            overflow: hidden;
        }

        .agent-name {
            font-weight: 600;
            font-size: 14px;
            white-space: nowrap;
        }

        .agent-id {
            font-size: 12px;
            color: rgba(255,255,255,0.6);
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .verified-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 14px;
            height: 14px;
            background: #4CAF50;
            border-radius: 50%;
            font-size: 8px;
        }

        .sidebar.collapsed .agent-info {
            display: none;
        }

        .collapse-btn {
            position: absolute;
            bottom: 80px;
            right: -12px;
            width: 24px;
            height: 24px;
            background: #0D3B13;
            border: 2px solid #4CAF50;
            border-radius: 50%;
            color: #4CAF50;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            transition: transform 0.3s;
        }

        .sidebar.collapsed .collapse-btn {
            transform: rotate(180deg);
        }

        /* Main Content */
        .main-content {
            margin-left: 260px;
            min-height: 100vh;
            transition: margin-left 0.3s ease;
        }

        .sidebar.collapsed ~ .main-content {
            margin-left: 70px;
        }

        /* Header */
        .header {
            background: #fff;
            padding: 16px 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-title {
            font-size: 20px;
            font-weight: 600;
            color: #0D3B13;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .search-box {
            position: relative;
        }

        .search-box input {
            padding: 10px 40px 10px 16px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            font-size: 14px;
            width: 280px;
            transition: border-color 0.3s;
        }

        .search-box input:focus {
            outline: none;
            border-color: #4CAF50;
        }

        .search-box svg {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            width: 18px;
            height: 18px;
            color: #999;
        }

        .notification-bell {
            position: relative;
            cursor: pointer;
            padding: 8px;
            border-radius: 8px;
            transition: background 0.3s;
        }

        .notification-bell:hover {
            background: #f5f5f5;
        }

        .notification-bell svg {
            width: 22px;
            height: 22px;
            color: #666;
        }

        .notification-count {
            position: absolute;
            top: 4px;
            right: 4px;
            background: #e53935;
            color: #fff;
            font-size: 10px;
            font-weight: bold;
            padding: 2px 6px;
            border-radius: 10px;
        }

        .profile-dropdown {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            padding: 6px 12px;
            border-radius: 8px;
            transition: background 0.3s;
        }

        .profile-dropdown:hover {
            background: #f5f5f5;
        }

        .profile-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #0D3B13;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 14px;
        }

        .profile-name {
            font-weight: 500;
            font-size: 14px;
        }

        .profile-dropdown svg {
            width: 16px;
            height: 16px;
            color: #666;
        }

        /* Content Area */
        .content {
            padding: 30px;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        /* Stat Cards */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: #fff;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            display: flex;
            align-items: center;
            gap: 16px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .stat-icon svg {
            width: 24px;
            height: 24px;
            color: #fff;
        }

        .stat-icon.listings {
            background: linear-gradient(135deg, #4CAF50, #2E7D32);
        }

        .stat-icon.active {
            background: linear-gradient(135deg, #2196F3, #1565C0);
        }

        .stat-icon.views {
            background: linear-gradient(135deg, #FF9800, #E65100);
        }

        .stat-icon.messages {
            background: linear-gradient(135deg, #9C27B0, #6A1B9A);
        }

        .stat-value {
            font-size: 28px;
            font-weight: 700;
            color: #0D3B13;
        }

        .stat-label {
            font-size: 13px;
            color: #666;
        }

        .stat-change {
            font-size: 12px;
            font-weight: 600;
            margin-top: 4px;
        }

        .stat-change.positive {
            color: #4CAF50;
        }

        .stat-change.negative {
            color: #e53935;
        }

        /* Sections */
        .section {
            background: #fff;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            margin-bottom: 24px;
        }

        .section-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .section-title {
            font-size: 16px;
            font-weight: 600;
            color: #0D3B13;
        }

        /* Timeline */
        .timeline {
            position: relative;
        }

        .timeline-item {
            display: flex;
            gap: 16px;
            padding: 12px 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .timeline-item:last-child {
            border-bottom: none;
        }

        .timeline-icon {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .timeline-icon svg {
            width: 16px;
            height: 16px;
            color: #fff;
        }

        .timeline-icon.view {
            background: #2196F3;
        }

        .timeline-icon.message {
            background: #4CAF50;
        }

        .timeline-icon.favorite {
            background: #FF9800;
        }

        .timeline-text {
            flex: 1;
        }

        .timeline-text p {
            font-size: 14px;
            color: #333;
            margin-bottom: 4px;
        }

        .timeline-text span {
            font-size: 12px;
            color: #999;
        }

        /* Quick Actions */
        .quick-actions {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .quick-action-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 12px 20px;
            background: #f8f9fa;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            color: #333;
            transition: all 0.3s;
        }

        .quick-action-btn:hover {
            background: #0D3B13;
            color: #fff;
            border-color: #0D3B13;
        }

        .quick-action-btn svg {
            width: 18px;
            height: 18px;
        }

        /* Listings Table */
        .listings-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
            gap: 16px;
            flex-wrap: wrap;
        }

        .filter-bar {
            display: flex;
            gap: 12px;
            flex: 1;
        }

        .filter-bar input {
            flex: 1;
            padding: 10px 16px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            font-size: 14px;
        }

        .filter-bar input:focus {
            outline: none;
            border-color: #4CAF50;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            border: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s;
        }

        .btn-primary {
            background: #0D3B13;
            color: #fff;
        }

        .btn-primary:hover {
            background: #1a5c24;
        }

        .btn-secondary {
            background: #f5f5f5;
            color: #333;
            border: 1px solid #e0e0e0;
        }

        .btn-secondary:hover {
            background: #e0e0e0;
        }

        .btn-danger {
            background: #fff;
            color: #e53935;
            border: 1px solid #e53935;
        }

        .btn-danger:hover {
            background: #e53935;
            color: #fff;
        }

        .btn svg {
            width: 16px;
            height: 16px;
        }

        .table-container {
            overflow-x: auto;
        }

        .listings-table {
            width: 100%;
            border-collapse: collapse;
        }

        .listings-table th {
            text-align: left;
            padding: 12px 16px;
            background: #f8f9fa;
            font-size: 12px;
            font-weight: 600;
            color: #666;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .listings-table td {
            padding: 16px;
            border-bottom: 1px solid #f0f0f0;
            font-size: 14px;
        }

        .listings-table tr:hover {
            background: #f8f9fa;
        }

        .listing-photo {
            width: 50px;
            height: 50px;
            background: #f0f0f0;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }

        .status-badge {
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .status-badge.active {
            background: #e8f5e9;
            color: #2e7d32;
        }

        .status-badge.pending {
            background: #fff3e0;
            color: #e65100;
        }

        .status-badge.sold {
            background: #ffebee;
            color: #c62828;
        }

        .action-btns {
            display: flex;
            gap: 8px;
        }

        .action-btn {
            width: 32px;
            height: 32px;
            border-radius: 6px;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }

        .action-btn svg {
            width: 16px;
            height: 16px;
        }

        .action-btn.edit {
            background: #e3f2fd;
            color: #1976d2;
        }

        .action-btn.edit:hover {
            background: #1976d2;
            color: #fff;
        }

        .action-btn.view {
            background: #e8f5e9;
            color: #2e7d32;
        }

        .action-btn.view:hover {
            background: #2e7d32;
            color: #fff;
        }

        .action-btn.delete {
            background: #ffebee;
            color: #c62828;
        }

        .action-btn.delete:hover {
            background: #c62828;
            color: #fff;
        }

        .price {
            font-weight: 600;
            color: #0D3B13;
        }

        /* Add Listing Form */
        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group.full-width {
            grid-column: span 2;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            color: #333;
            margin-bottom: 8px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            font-size: 14px;
            transition: border-color 0.3s;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #4CAF50;
        }

        .form-group textarea {
            min-height: 120px;
            resize: vertical;
        }

        .file-upload {
            border: 2px dashed #e0e0e0;
            border-radius: 8px;
            padding: 40px;
            text-align: center;
            cursor: pointer;
            transition: border-color 0.3s;
        }

        .file-upload:hover {
            border-color: #4CAF50;
        }

        .file-upload svg {
            width: 40px;
            height: 40px;
            color: #999;
            margin-bottom: 12px;
        }

        .file-upload p {
            color: #666;
            font-size: 14px;
        }

        .file-upload span {
            color: #4CAF50;
            font-weight: 500;
        }

        .form-actions {
            display: flex;
            gap: 12px;
            justify-content: flex-end;
            margin-top: 24px;
            padding-top: 24px;
            border-top: 1px solid #f0f0f0;
        }

        /* Profile */
        .profile-header {
            display: flex;
            align-items: center;
            gap: 24px;
            padding: 24px;
            background: linear-gradient(135deg, #0D3B13, #1a5c24);
            border-radius: 12px;
            color: #fff;
            margin-bottom: 24px;
        }

        .profile-large-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #4CAF50;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            font-weight: bold;
        }

        .profile-details h2 {
            font-size: 24px;
            margin-bottom: 4px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .profile-details p {
            color: rgba(255,255,255,0.8);
            font-size: 14px;
        }

        .profile-form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .account-status {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 24px;
        }

        .status-item {
            background: #f8f9fa;
            padding: 16px;
            border-radius: 8px;
            text-align: center;
        }

        .status-item label {
            font-size: 12px;
            color: #666;
            display: block;
            margin-bottom: 4px;
        }

        .status-item span {
            font-weight: 600;
            color: #0D3B13;
        }

        .status-item .verified {
            color: #4CAF50;
        }

        /* Modal */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 2000;
        }

        .modal-overlay.active {
            display: flex;
        }

        .modal {
            background: #fff;
            border-radius: 12px;
            padding: 32px;
            max-width: 400px;
            width: 90%;
            text-align: center;
        }

        .modal-icon {
            width: 60px;
            height: 60px;
            background: #ffebee;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }

        .modal-icon svg {
            width: 32px;
            height: 32px;
            color: #e53935;
        }

        .modal h3 {
            font-size: 18px;
            margin-bottom: 8px;
            color: #333;
        }

        .modal p {
            color: #666;
            font-size: 14px;
            margin-bottom: 24px;
        }

        .modal-actions {
            display: flex;
            gap: 12px;
            justify-content: center;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 70px;
            }

            .sidebar .nav-item span,
            .sidebar .agent-info,
            .sidebar .sidebar-logo span {
                display: none;
            }

            .main-content {
                margin-left: 70px;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .form-grid,
            .profile-form-grid {
                grid-template-columns: 1fr;
            }

            .form-group.full-width {
                grid-column: span 1;
            }

            .header {
                padding: 12px 16px;
            }

            .search-box input {
                width: 180px;
            }

            .content {
                padding: 16px;
            }

            .account-status {
                grid-template-columns: 1fr;
            }

            .profile-header {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <div class="sidebar-logo">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                    <rect width="32" height="32" rx="8" fill="#4CAF50"/>
                    <path d="M8 22V12L16 8L24 12V22L16 18L8 22Z" fill="white"/>
                </svg>
                <span>funaabhub</span>
            </div>
        </div>

        <nav class="sidebar-nav">
            <div class="nav-item active" data-tab="overview">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="3" y="3" width="7" height="7" rx="1"/>
                    <rect x="14" y="3" width="7" height="7" rx="1"/>
                    <rect x="3" y="14" width="7" height="7" rx="1"/>
                    <rect x="14" y="14" width="7" height="7" rx="1"/>
                </svg>
                <span>Overview</span>
            </div>
            <div class="nav-item" data-tab="listings">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                    <polyline points="9 22 9 12 15 12 15 22"/>
                </svg>
                <span>My Listings</span>
            </div>
            <div class="nav-item" data-tab="add-listing">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10"/>
                    <line x1="12" y1="8" x2="12" y2="16"/>
                    <line x1="8" y1="12" x2="16" y2="12"/>
                </svg>
                <span>Add Listing</span>
            </div>
            <div class="nav-item" data-tab="profile">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/>
                    <circle cx="12" cy="7" r="4"/>
                </svg>
                <span>Profile</span>
            </div>
            <div class="nav-item">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/>
                </svg>
                <span>Messages</span>
            </div>
            <div class="nav-item">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="3"/>
                    <path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-2 2 2 2 0 01-2-2v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3a2 2 0 01-2-2 2 2 0 012-2h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06a1.65 1.65 0 001.82.33H9a1.65 1.65 0 001-1.51V3a2 2 0 012-2 2 2 0 012 2v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9a1.65 1.65 0 001.51 1H21a2 2 0 012 2 2 2 0 01-2 2h-.09a1.65 1.65 0 00-1.51 1z"/>
                </svg>
                <span>Settings</span>
            </div>
        </nav>

        <div class="sidebar-footer">
            <div class="agent-avatar"><?php echo substr($agent['name'], 0, 2); ?></div>
            <div class="agent-info">
                <div class="agent-name"><?php echo $agent['name']; ?></div>
                <div class="agent-id">
                    <?php echo $agent['id']; ?>
                    <?php if ($agent['verified']): ?>
                        <span class="verified-badge">✓</span>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <button class="collapse-btn" id="collapseBtn">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="15 18 9 12 15 6"/>
            </svg>
        </button>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Header -->
        <header class="header">
            <h1 class="header-title">Agent Dashboard</h1>
            <div class="header-actions">
                <div class="search-box">
                    <input type="text" placeholder="Search listings...">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="11" cy="11" r="8"/>
                        <path d="M21 21l-4.35-4.35"/>
                    </svg>
                </div>
                <div class="notification-bell">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9"/>
                        <path d="M13.73 21a2 2 0 01-3.46 0"/>
                    </svg>
                    <span class="notification-count">3</span>
                </div>
                <div class="profile-dropdown">
                    <div class="profile-avatar"><?php echo substr($agent['name'], 0, 2); ?></div>
                    <span class="profile-name"><?php echo $agent['name']; ?></span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="6 9 12 15 18 9"/>
                    </svg>
                </div>
            </div>
        </header>

        <!-- Content -->
        <div class="content">
            <!-- Overview Tab -->
            <div class="tab-content active" id="overview">
                <!-- Stats -->
                <div class="stats-grid">
                    <?php foreach ($stats as $stat): ?>
                        <div class="stat-card">
                            <div class="stat-icon <?php echo $stat['icon']; ?>">
                                <?php if ($stat['icon'] === 'listings'): ?>
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                                    </svg>
                                <?php elseif ($stat['icon'] === 'active'): ?>
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                                    </svg>
                                <?php elseif ($stat['icon'] === 'views'): ?>
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                        <circle cx="12" cy="12" r="3"/>
                                    </svg>
                                <?php else: ?>
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/>
                                    </svg>
                                <?php endif; ?>
                            </div>
                            <div>
                                <div class="stat-value"><?php echo $stat['value']; ?></div>
                                <div class="stat-label"><?php echo $stat['label']; ?></div>
                                <div class="stat-change <?php echo $stat['positive'] ? 'positive' : 'negative'; ?>">
                                    <?php echo $stat['change']; ?> this month
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 24px;">
                    <!-- Recent Activity -->
                    <div class="section">
                        <div class="section-header">
                            <h3 class="section-title">Recent Activity</h3>
                        </div>
                        <div class="timeline">
                            <?php foreach ($activities as $activity): ?>
                                <div class="timeline-item">
                                    <div class="timeline-icon <?php echo $activity['type']; ?>">
                                        <?php if ($activity['type'] === 'view'): ?>
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                                <circle cx="12" cy="12" r="3"/>
                                            </svg>
                                        <?php elseif ($activity['type'] === 'message'): ?>
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/>
                                            </svg>
                                        <?php else: ?>
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/>
                                            </svg>
                                        <?php endif; ?>
                                    </div>
                                    <div class="timeline-text">
                                        <p><?php echo $activity['text']; ?></p>
                                        <span><?php echo $activity['time']; ?></span>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="section">
                        <div class="section-header">
                            <h3 class="section-title">Quick Actions</h3>
                        </div>
                        <div class="quick-actions" style="flex-direction: column;">
                            <button class="quick-action-btn" onclick="switchTab('add-listing')">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"/>
                                    <line x1="12" y1="8" x2="12" y2="16"/>
                                    <line x1="8" y1="12" x2="16" y2="12"/>
                                </svg>
                                Add New Listing
                            </button>
                            <button class="quick-action-btn" onclick="switchTab('profile')">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/>
                                    <circle cx="12" cy="7" r="4"/>
                                </svg>
                                View Profile
                            </button>
                            <button class="quick-action-btn">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/>
                                </svg>
                                Check Messages
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- My Listings Tab -->
            <div class="tab-content" id="listings">
                <div class="section">
                    <div class="listings-header">
                        <div class="filter-bar">
                            <input type="text" placeholder="Search listings by title or area...">
                        </div>
                        <button class="btn btn-primary" onclick="switchTab('add-listing')">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                            Add New Listing
                        </button>
                    </div>

                    <div class="table-container">
                        <table class="listings-table">
                            <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Title</th>
                                    <th>Area</th>
                                    <th>Price</th>
                                    <th>Rooms</th>
                                    <th>Status</th>
                                    <th>Views</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listings as $listing): ?>
                                    <tr>
                                        <td>
                                            <div class="listing-photo"><?php echo $listing['photo']; ?></div>
                                        </td>
                                        <td><strong><?php echo $listing['title']; ?></strong></td>
                                        <td><?php echo $listing['area']; ?></td>
                                        <td class="price">₦<?php echo number_format($listing['price']); ?></td>
                                        <td><?php echo $listing['rooms']; ?></td>
                                        <td>
                                            <span class="status-badge <?php echo strtolower($listing['status']); ?>">
                                                <?php echo $listing['status']; ?>
                                            </span>
                                        </td>
                                        <td><?php echo $listing['views']; ?></td>
                                        <td>
                                            <div class="action-btns">
                                                <button class="action-btn edit" title="Edit">
                                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                        <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/>
                                                        <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/>
                                                    </svg>
                                                </button>
                                                <button class="action-btn view" title="View">
                                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                                        <circle cx="12" cy="12" r="3"/>
                                                    </svg>
                                                </button>
                                                <button class="action-btn delete" title="Delete" onclick="showDeleteModal(<?php echo $listing['id']; ?>)">
                                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                        <polyline points="3 6 5 6 21 6"/>
                                                        <path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Add Listing Tab -->
            <div class="tab-content" id="add-listing">
                <div class="section">
                    <div class="section-header">
                        <h3 class="section-title">Add New Listing</h3>
                    </div>

                    <form>
                        <div class="form-grid">
                            <div class="form-group full-width">
                                <label for="title">Listing Title</label>
                                <input type="text" id="title" placeholder="e.g., 3 Bedroom Flat in Camp">
                            </div>

                            <div class="form-group">
                                <label for="area">Area / Location</label>
                                <select id="area">
                                    <option value="">Select Area</option>
                                    <option value="camp">Camp</option>
                                    <option value="harmony">Harmony</option>
                                    <option value="gateway">Gateway</option>
                                    <option value="aluta">Aluta</option>
                                    <option value="camp-extension">Camp Extension</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="price">Price (NGN)</label>
                                <input type="number" id="price" placeholder="e.g., 350000">
                            </div>

                            <div class="form-group">
                                <label for="rooms">Number of Rooms</label>
                                <input type="number" id="rooms" placeholder="e.g., 3" min="1">
                            </div>

                            <div class="form-group">
                                <label for="bathrooms">Number of Bathrooms</label>
                                <input type="number" id="bathrooms" placeholder="e.g., 2" min="1">
                            </div>

                            <div class="form-group full-width">
                                <label for="description">Description</label>
                                <textarea id="description" placeholder="Describe the property features, amenities, and any other relevant details..."></textarea>
                            </div>

                            <div class="form-group full-width">
                                <label>Property Photos</label>
                                <div class="file-upload">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                                        <circle cx="8.5" cy="8.5" r="1.5"/>
                                        <polyline points="21 15 16 10 5 21"/>
                                    </svg>
                                    <p>Drag and drop photos here, or <span>browse</span></p>
                                    <p style="font-size: 12px; color: #999; margin-top: 8px;">Supports: JPG, PNG, WEBP (Max 5MB each)</p>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="button" class="btn btn-secondary" onclick="switchTab('listings')">Cancel</button>
                            <button type="submit" class="btn btn-primary">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h11l5 5v11a2 2 0 01-2 2z"/>
                                    <polyline points="17 21 17 13 7 13 7 21"/>
                                    <polyline points="7 3 7 8 15 8"/>
                                </svg>
                                Submit Listing
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Profile Tab -->
            <div class="tab-content" id="profile">
                <div class="profile-header">
                    <div class="profile-large-avatar"><?php echo substr($agent['name'], 0, 2); ?></div>
                    <div class="profile-details">
                        <h2>
                            <?php echo $agent['name']; ?>
                            <?php if ($agent['verified']): ?>
                                <span class="verified-badge" style="width: 20px; height: 20px; font-size: 12px;">✓</span>
                            <?php endif; ?>
                        </h2>
                        <p><?php echo $agent['id']; ?> | <?php echo $agent['department']; ?></p>
                        <p style="margin-top: 4px;"><?php echo $agent['area']; ?> Area Coverage</p>
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 24px;">
                    <div class="section">
                        <div class="section-header">
                            <h3 class="section-title">Edit Profile</h3>
                        </div>

                        <form>
                            <div class="profile-form-grid">
                                <div class="form-group">
                                    <label for="full-name">Full Name</label>
                                    <input type="text" id="full-name" value="<?php echo $agent['name']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="matric">Matric Number</label>
                                    <input type="text" id="matric" value="<?php echo $agent['matric']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="department">Department</label>
                                    <input type="text" id="department" value="<?php echo $agent['department']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" id="phone" value="<?php echo $agent['phone']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="whatsapp">WhatsApp Number</label>
                                    <input type="tel" id="whatsapp" value="<?php echo $agent['whatsapp']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="coverage">Area of Coverage</label>
                                    <select id="coverage">
                                        <option value="camp" <?php echo $agent['area'] === 'Camp' ? 'selected' : ''; ?>>Camp</option>
                                        <option value="harmony" <?php echo $agent['area'] === 'Harmony' ? 'selected' : ''; ?>>Harmony</option>
                                        <option value="gateway" <?php echo $agent['area'] === 'Gateway' ? 'selected' : ''; ?>>Gateway</option>
                                        <option value="aluta" <?php echo $agent['area'] === 'Aluta' ? 'selected' : ''; ?>>Aluta</option>
                                        <option value="camp-extension" <?php echo $agent['area'] === 'Camp Extension' ? 'selected' : ''; ?>>Camp Extension</option>
                                    </select>
                                </div>

                                <div class="form-group full-width">
                                    <label>Profile Photo</label>
                                    <div class="file-upload" style="padding: 20px;">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width: 30px; height: 30px;">
                                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/>
                                            <circle cx="12" cy="7" r="4"/>
                                        </svg>
                                        <p style="margin-top: 8px;">Click to upload new photo</p>
                                    </div>
                                </div>

                                <div class="form-group full-width" style="grid-column: span 2; margin-top: 12px;">
                                    <h4 style="font-size: 14px; color: #666; margin-bottom: 16px; padding-bottom: 8px; border-bottom: 1px solid #f0f0f0;">Caretaker Information</h4>
                                </div>

                                <div class="form-group">
                                    <label for="caretaker-name">Caretaker Name</label>
                                    <input type="text" id="caretaker-name" value="<?php echo $agent['caretaker_name']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="caretaker-office">Office Location</label>
                                    <input type="text" id="caretaker-office" value="<?php echo $agent['caretaker_office']; ?>">
                                </div>
                            </div>

                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h11l5 5v11a2 2 0 01-2 2z"/>
                                        <polyline points="17 21 17 13 7 13 7 21"/>
                                        <polyline points="7 3 7 8 15 8"/>
                                    </svg>
                                    Save Changes
                                </button>
                            </div>
                        </form>
                    </div>

                    <div>
                        <div class="section">
                            <div class="section-header">
                                <h3 class="section-title">Account Status</h3>
                            </div>
                            <div class="account-status" style="grid-template-columns: 1fr;">
                                <div class="status-item">
                                    <label>Verification Status</label>
                                    <span class="verified">✓ Verified</span>
                                </div>
                                <div class="status-item">
                                    <label>Member Since</label>
                                    <span><?php echo $agent['member_since']; ?></span>
                                </div>
                                <div class="status-item">
                                    <label>Last Active</label>
                                    <span><?php echo $agent['last_active']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Delete Modal -->
    <div class="modal-overlay" id="deleteModal">
        <div class="modal">
            <div class="modal-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10"/>
                    <line x1="12" y1="8" x2="12" y2="12"/>
                    <line x1="12" y1="16" x2="12.01" y2="16"/>
                </svg>
            </div>
            <h3>Are you sure?</h3>
            <p>This action cannot be undone. The listing will be permanently deleted from your account.</p>
            <div class="modal-actions">
                <button class="btn btn-secondary" onclick="hideDeleteModal()">Cancel</button>
                <button class="btn btn-danger" onclick="confirmDelete()">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="3 6 5 6 21 6"/>
                        <path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"/>
                    </svg>
                    Delete Listing
                </button>
            </div>
        </div>
    </div>

    <script>
        // Tab switching
        function switchTab(tabName) {
            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(function(tab) {
                tab.classList.remove('active');
            });

            // Remove active from all nav items
            document.querySelectorAll('.nav-item').forEach(function(item) {
                item.classList.remove('active');
            });

            // Show selected tab
            var targetTab = document.getElementById(tabName);
            if (targetTab) {
                targetTab.classList.add('active');
            }

            // Add active to clicked nav item
            var navItem = document.querySelector('.nav-item[data-tab="' + tabName + '"]');
            if (navItem) {
                navItem.classList.add('active');
            }
        }

        // Nav item click handlers
        document.querySelectorAll('.nav-item[data-tab]').forEach(function(item) {
            item.addEventListener('click', function() {
                var tabName = this.getAttribute('data-tab');
                switchTab(tabName);
            });
        });

        // Sidebar collapse
        var sidebar = document.getElementById('sidebar');
        var collapseBtn = document.getElementById('collapseBtn');

        collapseBtn.addEventListener('click', function() {
            sidebar.classList.toggle('collapsed');
        });

        // Delete modal
        var deleteListingId = null;

        function showDeleteModal(id) {
            deleteListingId = id;
            document.getElementById('deleteModal').classList.add('active');
        }

        function hideDeleteModal() {
            deleteListingId = null;
            document.getElementById('deleteModal').classList.remove('active');
        }

        function confirmDelete() {
            if (deleteListingId) {
                alert('Listing #' + deleteListingId + ' has been deleted.');
                hideDeleteModal();
            }
        }

        // Close modal on overlay click
        document.getElementById('deleteModal').addEventListener('click', function(e) {
            if (e.target === this) {
                hideDeleteModal();
            }
        });

        // Close modal on Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                hideDeleteModal();
            }
        });
    </script>
</body>
</html>
