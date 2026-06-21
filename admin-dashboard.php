<?php
// Demo Data
$admin = [
    'name' => 'SUG Welfare Admin',
    'role' => 'SUG Welfare Admin',
    'avatar' => 'SW',
    'email' => 'admin@funaabhub.edu.ng'
];

$stats = [
    'pending_approvals' => 7,
    'total_agents' => 89,
    'total_reports' => 12,
    'active_listings' => 156,
];

$agents = [
    [
        'id' => 'AGT001',
        'photo' => 'AO',
        'name' => 'Adebayo Olawale',
        'matric' => '20/25/0001',
        'department' => 'Computer Science',
        'area' => 'Idi-Aba',
        'phone' => '08012345678',
        'nin_status' => 'Verified',
        'caretaker' => 'Mr. Okonkwo',
        'date_applied' => '2026-06-15',
        'status' => 'pending',
        'joined' => '2026-06-15',
    ],
    [
        'id' => 'AGT002',
        'photo' => 'FE',
        'name' => 'Fatima El-Rashid',
        'matric' => '20/25/0042',
        'department' => 'Business Admin',
        'area' => 'Abeokuta Road',
        'phone' => '08098765432',
        'nin_status' => 'Verified',
        'caretaker' => 'Mrs. Bello',
        'date_applied' => '2026-06-14',
        'status' => 'approved',
        'joined' => '2026-06-14',
    ],
    [
        'id' => 'AGT003',
        'photo' => 'CN',
        'name' => 'Chukwuemeka Nwosu',
        'matric' => '20/24/0118',
        'department' => 'Mass Communication',
        'area' => 'Campus Road',
        'phone' => '07055443322',
        'nin_status' => 'Pending',
        'caretaker' => 'Chief Emeka',
        'date_applied' => '2026-06-13',
        'status' => 'pending',
        'joined' => '2026-06-13',
    ],
    [
        'id' => 'AGT004',
        'photo' => 'AA',
        'name' => 'Abdullahi Abubakar',
        'matric' => '20/25/0087',
        'department' => 'Engineering',
        'area' => 'Odeda',
        'phone' => '08166778899',
        'nin_status' => 'Verified',
        'caretaker' => 'Alhaji Musa',
        'date_applied' => '2026-06-12',
        'status' => 'approved',
        'joined' => '2026-06-12',
    ],
    [
        'id' => 'AGT005',
        'photo' => 'OI',
        'name' => 'Oluwaseun Ibitoye',
        'matric' => '20/24/0056',
        'department' => 'Law',
        'area' => 'Obantoko',
        'phone' => '09011223344',
        'nin_status' => 'Rejected',
        'caretaker' => 'Mr. Ibitoye',
        'date_applied' => '2026-06-11',
        'status' => 'rejected',
        'joined' => '2026-06-11',
    ],
    [
        'id' => 'AGT006',
        'photo' => 'BA',
        'name' => 'Blessing Amadi',
        'matric' => '20/25/0033',
        'department' => 'Pharmacy',
        'area' => 'Lafenwa',
        'phone' => '08133445566',
        'nin_status' => 'Verified',
        'caretaker' => 'Dr. Amadi',
        'date_applied' => '2026-06-10',
        'status' => 'suspended',
        'joined' => '2026-06-10',
    ],
    [
        'id' => 'AGT007',
        'photo' => 'KO',
        'name' => 'Kemi Olatunde',
        'matric' => '20/24/0091',
        'department' => 'Education',
        'area' => 'Idi-Aba',
        'phone' => '07099887766',
        'nin_status' => 'Verified',
        'caretaker' => 'Mrs. Olatunde',
        'date_applied' => '2026-06-09',
        'status' => 'approved',
        'joined' => '2026-06-09',
    ],
    [
        'id' => 'AGT008',
        'photo' => 'TS',
        'name' => 'Tunde Sobowale',
        'matric' => '20/25/0075',
        'department' => 'Sciences',
        'area' => 'Campus Road',
        'phone' => '08155667788',
        'nin_status' => 'Pending',
        'caretaker' => 'Mr. Sobowale',
        'date_applied' => '2026-06-08',
        'status' => 'pending',
        'joined' => '2026-06-08',
    ],
];

$reports = [
    [
        'id' => 'RPT001',
        'reporter' => 'Ibrahim Suleiman',
        'agent' => 'Adebayo Olawale',
        'agent_id' => 'AGT001',
        'type' => 'Scam attempt',
        'description' => 'Agent requested payment before showing the house.',
        'date' => '2026-06-20',
        'status' => 'pending',
    ],
    [
        'id' => 'RPT002',
        'reporter' => 'Grace Chidinma',
        'agent' => 'Fatima El-Rashid',
        'agent_id' => 'AGT002',
        'type' => 'Overcharging',
        'description' => 'Rent increased by 40% after verbal agreement.',
        'date' => '2026-06-19',
        'status' => 'reviewed',
    ],
    [
        'id' => 'RPT003',
        'reporter' => 'Emmanuel Ogundipe',
        'agent' => 'Oluwaseun Ibitoye',
        'agent_id' => 'AGT005',
        'type' => 'Fake listing',
        'description' => 'Photos do not match the actual property.',
        'date' => '2026-06-18',
        'status' => 'resolved',
    ],
    [
        'id' => 'RPT004',
        'reporter' => 'Amina Yusuf',
        'agent' => 'Blessing Amadi',
        'agent_id' => 'AGT006',
        'type' => 'No response',
        'description' => 'Agent has not responded to messages for 5 days.',
        'date' => '2026-06-17',
        'status' => 'pending',
    ],
    [
        'id' => 'RPT005',
        'reporter' => 'David Okeowo',
        'agent' => 'Chukwuemeka Nwosu',
        'agent_id' => 'AGT003',
        'type' => 'Extortion',
        'description' => 'Agent demanding extra charges not in the agreement.',
        'date' => '2026-06-16',
        'status' => 'pending',
    ],
];

$listings = [
    [
        'id' => 'LST001',
        'image' => '🏠',
        'title' => '2 Bedroom Flat',
        'agent' => 'Fatima El-Rashid',
        'area' => 'Idi-Aba',
        'price' => 350000,
        'rooms' => 2,
        'status' => 'active',
        'views' => 234,
    ],
    [
        'id' => 'LST002',
        'image' => '🏢',
        'title' => 'Single Room Self-Contain',
        'agent' => 'Abdullahi Abubakar',
        'area' => 'Abeokuta Road',
        'price' => 120000,
        'rooms' => 1,
        'status' => 'active',
        'views' => 189,
    ],
    [
        'id' => 'LST003',
        'image' => '🏠',
        'title' => '3 Bedroom Bungalow',
        'agent' => 'Kemi Olatunde',
        'area' => 'Campus Road',
        'price' => 500000,
        'rooms' => 3,
        'status' => 'active',
        'views' => 312,
    ],
    [
        'id' => 'LST004',
        'image' => '🏘️',
        'title' => 'Room and Parlour',
        'agent' => 'Adebayo Olawale',
        'area' => 'Obantoko',
        'price' => 80000,
        'rooms' => 1,
        'status' => 'pending',
        'views' => 67,
    ],
    [
        'id' => 'LST005',
        'image' => '🏢',
        'title' => '2 Room Apartment',
        'agent' => 'Abdullahi Abubakar',
        'area' => 'Lafenwa',
        'price' => 200000,
        'rooms' => 2,
        'status' => 'active',
        'views' => 145,
    ],
    [
        'id' => 'LST006',
        'image' => '🏠',
        'title' => 'Mini Flat',
        'agent' => 'Fatima El-Rashid',
        'area' => 'Odeda',
        'price' => 150000,
        'rooms' => 1,
        'status' => 'removed',
        'views' => 98,
    ],
];

function formatNaira($amount) {
    return '₦' . number_format($amount);
}

function getStatusColor($status) {
    switch($status) {
        case 'approved':
        case 'active':
        case 'resolved':
            return 'green';
        case 'pending':
        case 'reviewed':
            return 'yellow';
        case 'rejected':
        case 'removed':
            return 'red';
        case 'suspended':
            return 'orange';
        default:
            return 'grey';
    }
}

function getReportTypeIcon($type) {
    switch($type) {
        case 'Scam attempt':
            return '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>';
        case 'Overcharging':
            return '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>';
        case 'Fake listing':
            return '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>';
        case 'No response':
            return '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>';
        case 'Extortion':
            return '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>';
        default:
            return '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUG Admin Dashboard - FUNAABHUB</title>
    <link rel="stylesheet" href="assets/style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5;
            color: #1a1a1a;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 260px;
            height: 100vh;
            background: #0D3B13;
            color: white;
            z-index: 1000;
            display: flex;
            flex-direction: column;
            transition: width 0.3s ease;
            overflow: hidden;
        }

        .sidebar.collapsed {
            width: 70px;
        }

        .sidebar-header {
            padding: 24px 20px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .sidebar-logo {
            width: 40px;
            height: 40px;
            background: #157a23;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 14px;
            flex-shrink: 0;
        }

        .sidebar-brand h2 {
            font-size: 16px;
            font-weight: 600;
            white-space: nowrap;
        }

        .sidebar-brand span {
            font-size: 11px;
            color: #7cda7f;
            white-space: nowrap;
        }

        .sidebar.collapsed .sidebar-brand,
        .sidebar.collapsed .nav-text,
        .sidebar.collapsed .admin-details,
        .sidebar.collapsed .collapse-text {
            display: none;
        }

        .sidebar-nav {
            flex: 1;
            padding: 16px 12px;
            overflow-y: auto;
        }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.2s;
            margin-bottom: 4px;
            text-decoration: none;
            color: rgba(255,255,255,0.7);
            white-space: nowrap;
        }

        .nav-item:hover {
            background: rgba(255,255,255,0.1);
            color: white;
        }

        .nav-item.active {
            background: #157a23;
            color: white;
        }

        .nav-item svg {
            flex-shrink: 0;
        }

        .sidebar-footer {
            padding: 16px 20px;
            border-top: 1px solid rgba(255,255,255,0.1);
        }

        .admin-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .admin-avatar {
            width: 40px;
            height: 40px;
            background: #157a23;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 14px;
            flex-shrink: 0;
        }

        .admin-details h4 {
            font-size: 13px;
            font-weight: 600;
            white-space: nowrap;
        }

        .admin-details span {
            font-size: 11px;
            color: #7cda7f;
            white-space: nowrap;
        }

        .collapse-btn {
            padding: 12px 20px;
            border-top: 1px solid rgba(255,255,255,0.1);
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 12px;
            color: rgba(255,255,255,0.7);
            transition: all 0.2s;
            background: none;
            border: none;
            width: 100%;
            text-align: left;
        }

        .collapse-btn:hover {
            background: rgba(255,255,255,0.1);
            color: white;
        }

        .sidebar.collapsed .collapse-btn svg {
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
            background: white;
            padding: 16px 32px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-title h1 {
            font-size: 22px;
            font-weight: 700;
            color: #0D3B13;
        }

        .header-title p {
            font-size: 13px;
            color: #666;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .search-box {
            position: relative;
        }

        .search-box input {
            padding: 10px 16px 10px 40px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            width: 280px;
            font-size: 14px;
            transition: all 0.2s;
        }

        .search-box input:focus {
            outline: none;
            border-color: #157a23;
            box-shadow: 0 0 0 3px rgba(21,122,35,0.1);
        }

        .search-box svg {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
        }

        .notification-btn {
            position: relative;
            background: none;
            border: none;
            cursor: pointer;
            padding: 8px;
            border-radius: 8px;
            transition: background 0.2s;
        }

        .notification-btn:hover {
            background: #f0f0f0;
        }

        .notification-badge {
            position: absolute;
            top: 4px;
            right: 4px;
            width: 8px;
            height: 8px;
            background: #ef4444;
            border-radius: 50%;
            border: 2px solid white;
        }

        .header-profile {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            padding: 6px 12px;
            border-radius: 8px;
            transition: background 0.2s;
        }

        .header-profile:hover {
            background: #f0f0f0;
        }

        .header-avatar {
            width: 36px;
            height: 36px;
            background: #0D3B13;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 13px;
        }

        .header-profile-info span {
            display: block;
            font-size: 13px;
            font-weight: 600;
        }

        .header-profile-info small {
            font-size: 11px;
            color: #666;
        }

        /* Content Area */
        .content {
            padding: 24px 32px;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        /* Stats Cards */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 24px;
        }

        .stat-card {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
        }

        .stat-info h3 {
            font-size: 13px;
            color: #666;
            font-weight: 500;
            margin-bottom: 8px;
        }

        .stat-info .stat-number {
            font-size: 28px;
            font-weight: 700;
            color: #0D3B13;
        }

        .stat-info .stat-trend {
            font-size: 12px;
            margin-top: 8px;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .stat-trend.up {
            color: #16a34a;
        }

        .stat-trend.down {
            color: #dc2626;
        }

        .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .stat-icon.yellow {
            background: #fef3c7;
            color: #d97706;
        }

        .stat-icon.green {
            background: #d1fae5;
            color: #059669;
        }

        .stat-icon.red {
            background: #fee2e2;
            color: #dc2626;
        }

        .stat-icon.blue {
            background: #dbeafe;
            color: #2563eb;
        }

        /* Tables */
        .table-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .table-header {
            padding: 16px 20px;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .table-header h3 {
            font-size: 16px;
            font-weight: 600;
        }

        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            text-align: left;
            padding: 12px 16px;
            font-size: 12px;
            font-weight: 600;
            color: #666;
            text-transform: uppercase;
            background: #f9fafb;
            border-bottom: 1px solid #e5e7eb;
        }

        td {
            padding: 12px 16px;
            font-size: 14px;
            border-bottom: 1px solid #f0f0f0;
        }

        tr:hover {
            background: #f9fafb;
        }

        .agent-cell {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .agent-photo {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #d1fae5;
            color: #059669;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 14px;
            flex-shrink: 0;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
        }

        .status-badge.green {
            background: #d1fae5;
            color: #059669;
        }

        .status-badge.yellow {
            background: #fef3c7;
            color: #d97706;
        }

        .status-badge.red {
            background: #fee2e2;
            color: #dc2626;
        }

        .status-badge.orange {
            background: #ffedd5;
            color: #ea580c;
        }

        .action-btns {
            display: flex;
            gap: 8px;
        }

        .btn {
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 500;
            cursor: pointer;
            border: none;
            transition: all 0.2s;
        }

        .btn-primary {
            background: #0D3B13;
            color: white;
        }

        .btn-primary:hover {
            background: #0a2e0f;
        }

        .btn-success {
            background: #16a34a;
            color: white;
        }

        .btn-success:hover {
            background: #15803d;
        }

        .btn-danger {
            background: #dc2626;
            color: white;
        }

        .btn-danger:hover {
            background: #b91c1c;
        }

        .btn-outline {
            background: white;
            border: 1px solid #e0e0e0;
            color: #333;
        }

        .btn-outline:hover {
            background: #f5f5f5;
        }

        .btn-warning {
            background: #ea580c;
            color: white;
        }

        .btn-warning:hover {
            background: #c2410c;
        }

        /* Two Column Layout */
        .two-columns {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 24px;
        }

        /* Reports List */
        .reports-list {
            padding: 0;
        }

        .report-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            padding: 14px 20px;
            border-bottom: 1px solid #f0f0f0;
            transition: background 0.2s;
        }

        .report-item:last-child {
            border-bottom: none;
        }

        .report-item:hover {
            background: #f9fafb;
        }

        .report-icon {
            width: 36px;
            height: 36px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .report-icon.red {
            background: #fee2e2;
            color: #dc2626;
        }

        .report-icon.yellow {
            background: #fef3c7;
            color: #d97706;
        }

        .report-icon.orange {
            background: #ffedd5;
            color: #ea580c;
        }

        .report-details {
            flex: 1;
            min-width: 0;
        }

        .report-details h4 {
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 2px;
        }

        .report-details p {
            font-size: 12px;
            color: #666;
            margin-bottom: 4px;
        }

        .report-details small {
            font-size: 11px;
            color: #999;
        }

        /* Platform Health */
        .health-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
        }

        .health-card {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            text-align: center;
        }

        .health-card h4 {
            font-size: 12px;
            color: #666;
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        .health-card .health-number {
            font-size: 24px;
            font-weight: 700;
            color: #0D3B13;
        }

        .health-card .health-label {
            font-size: 12px;
            color: #999;
            margin-top: 4px;
        }

        /* Filter Bar */
        .filter-bar {
            display: flex;
            gap: 12px;
            margin-bottom: 20px;
            flex-wrap: wrap;
            align-items: center;
        }

        .filter-bar select,
        .filter-bar input {
            padding: 10px 16px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            font-size: 14px;
            background: white;
        }

        .filter-bar select:focus,
        .filter-bar input:focus {
            outline: none;
            border-color: #157a23;
        }

        .filter-bar .search-input {
            flex: 1;
            min-width: 200px;
        }

        /* Checkbox */
        .checkbox-cell {
            width: 40px;
        }

        .checkbox-cell input[type="checkbox"] {
            width: 16px;
            height: 16px;
            cursor: pointer;
            accent-color: #157a23;
        }

        /* Modal */
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 2000;
            align-items: center;
            justify-content: center;
        }

        .modal-overlay.active {
            display: flex;
        }

        .modal {
            background: white;
            border-radius: 16px;
            width: 90%;
            max-width: 600px;
            max-height: 90vh;
            overflow-y: auto;
        }

        .modal-header {
            padding: 20px 24px;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .modal-header h2 {
            font-size: 18px;
            font-weight: 600;
        }

        .modal-close {
            background: none;
            border: none;
            cursor: pointer;
            padding: 4px;
            border-radius: 6px;
            color: #666;
        }

        .modal-close:hover {
            background: #f0f0f0;
        }

        .modal-body {
            padding: 24px;
        }

        .agent-profile {
            display: flex;
            gap: 20px;
            margin-bottom: 24px;
        }

        .agent-profile-photo {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #d1fae5;
            color: #059669;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 24px;
            flex-shrink: 0;
        }

        .agent-profile-info h3 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .agent-profile-info p {
            font-size: 14px;
            color: #666;
        }

        .detail-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            margin-bottom: 24px;
        }

        .detail-item {
            padding: 12px;
            background: #f9fafb;
            border-radius: 8px;
        }

        .detail-item label {
            display: block;
            font-size: 11px;
            color: #666;
            text-transform: uppercase;
            margin-bottom: 4px;
        }

        .detail-item span {
            font-size: 14px;
            font-weight: 500;
        }

        .documents-section {
            margin-bottom: 24px;
        }

        .documents-section h4 {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .document-placeholder {
            padding: 24px;
            border: 2px dashed #e0e0e0;
            border-radius: 8px;
            text-align: center;
            color: #999;
        }

        .modal-actions {
            display: flex;
            gap: 12px;
            padding-top: 16px;
            border-top: 1px solid #e5e7eb;
        }

        .modal-actions .btn {
            flex: 1;
            padding: 12px;
            font-size: 14px;
        }

        /* View details link */
        .view-link {
            color: #0D3B13;
            cursor: pointer;
            font-weight: 500;
        }

        .view-link:hover {
            text-decoration: underline;
        }

        /* Image placeholder for listings */
        .listing-image {
            width: 60px;
            height: 45px;
            background: #f0f2f5;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .two-columns {
                grid-template-columns: 1fr;
            }
            .health-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 70px;
            }
            .sidebar .sidebar-brand,
            .sidebar .nav-text,
            .sidebar .admin-details,
            .sidebar .collapse-text {
                display: none;
            }
            .main-content {
                margin-left: 70px;
            }
            .stats-grid {
                grid-template-columns: 1fr;
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
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <div class="sidebar-logo">FH</div>
            <div class="sidebar-brand">
                <h2>funaaBHub</h2>
                <span>SUG Admin</span>
            </div>
        </div>

        <nav class="sidebar-nav">
            <a href="#" class="nav-item active" data-tab="overview">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/></svg>
                <span class="nav-text">Overview</span>
            </a>
            <a href="#" class="nav-item" data-tab="approvals">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="8.5" cy="7" r="4"/><polyline points="17 11 19 13 23 9"/></svg>
                <span class="nav-text">Agent Approvals</span>
            </a>
            <a href="#" class="nav-item" data-tab="manage">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                <span class="nav-text">Manage Agents</span>
            </a>
            <a href="#" class="nav-item" data-tab="listings">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                <span class="nav-text">House Listings</span>
            </a>
            <a href="#" class="nav-item" data-tab="reports">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                <span class="nav-text">Reports & Flags</span>
            </a>
            <a href="#" class="nav-item" data-tab="settings">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06A1.65 1.65 0 0 0 4.68 15a1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06A1.65 1.65 0 0 0 9 4.68a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>
                <span class="nav-text">Settings</span>
            </a>
        </nav>

        <div class="sidebar-footer">
            <div class="admin-info">
                <div class="admin-avatar"><?php echo $admin['avatar']; ?></div>
                <div class="admin-details">
                    <h4><?php echo $admin['name']; ?></h4>
                    <span><?php echo $admin['role']; ?></span>
                </div>
            </div>
        </div>

        <button class="collapse-btn" id="collapseBtn">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="11 17 6 12 11 7"/><polyline points="18 17 13 12 18 7"/></svg>
            <span class="collapse-text">Collapse</span>
        </button>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Header -->
        <header class="header">
            <div class="header-title">
                <h1>Admin Dashboard</h1>
                <p>Welcome back, <?php echo $admin['name']; ?></p>
            </div>
            <div class="header-actions">
                <div class="search-box">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                    <input type="text" placeholder="Search...">
                </div>
                <button class="notification-btn">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                    <span class="notification-badge"></span>
                </button>
                <div class="header-profile">
                    <div class="header-avatar"><?php echo $admin['avatar']; ?></div>
                    <div class="header-profile-info">
                        <span><?php echo $admin['name']; ?></span>
                        <small>Super Admin</small>
                    </div>
                </div>
            </div>
        </header>

        <!-- Content -->
        <div class="content">
            <!-- Overview Tab -->
            <div class="tab-content active" id="tab-overview">
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-info">
                            <h3>Pending Approvals</h3>
                            <div class="stat-number"><?php echo $stats['pending_approvals']; ?></div>
                            <div class="stat-trend up">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/></svg>
                                +2 this week
                            </div>
                        </div>
                        <div class="stat-icon yellow">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-info">
                            <h3>Total Agents</h3>
                            <div class="stat-number"><?php echo $stats['total_agents']; ?></div>
                            <div class="stat-trend up">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/></svg>
                                +5 this week
                            </div>
                        </div>
                        <div class="stat-icon green">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-info">
                            <h3>Total Reports</h3>
                            <div class="stat-number"><?php echo $stats['total_reports']; ?></div>
                            <div class="stat-trend down">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"/></svg>
                                -3 resolved
                            </div>
                        </div>
                        <div class="stat-icon red">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-info">
                            <h3>Active Listings</h3>
                            <div class="stat-number"><?php echo $stats['active_listings']; ?></div>
                            <div class="stat-trend up">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/></svg>
                                +12 this week
                            </div>
                        </div>
                        <div class="stat-icon blue">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                        </div>
                    </div>
                </div>

                <div class="two-columns">
                    <div class="table-card">
                        <div class="table-header">
                            <h3>Recent Agent Applications</h3>
                            <a href="#" class="view-link" onclick="switchTab('approvals')">View All</a>
                        </div>
                        <div class="table-container">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Agent</th>
                                        <th>Matric No</th>
                                        <th>Department</th>
                                        <th>Area</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach(array_slice($agents, 0, 5) as $agent): ?>
                                    <tr>
                                        <td>
                                            <div class="agent-cell">
                                                <div class="agent-photo"><?php echo $agent['photo']; ?></div>
                                                <span><?php echo $agent['name']; ?></span>
                                            </div>
                                        </td>
                                        <td><?php echo $agent['matric']; ?></td>
                                        <td><?php echo $agent['department']; ?></td>
                                        <td><?php echo $agent['area']; ?></td>
                                        <td><?php echo date('M d', strtotime($agent['date_applied'])); ?></td>
                                        <td><span class="status-badge <?php echo getStatusColor($agent['status']); ?>"><?php echo ucfirst($agent['status']); ?></span></td>
                                        <td><button class="btn btn-primary" onclick="openAgentModal('<?php echo $agent['id']; ?>')">View</button></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="table-card">
                        <div class="table-header">
                            <h3>Recent Reports</h3>
                            <a href="#" class="view-link" onclick="switchTab('reports')">View All</a>
                        </div>
                        <div class="reports-list">
                            <?php foreach(array_slice($reports, 0, 5) as $report): ?>
                            <div class="report-item">
                                <div class="report-icon <?php echo $report['status'] === 'pending' ? 'red' : ($report['status'] === 'reviewed' ? 'yellow' : 'orange'); ?>">
                                    <?php echo getReportTypeIcon($report['type']); ?>
                                </div>
                                <div class="report-details">
                                    <h4><?php echo $report['type']; ?></h4>
                                    <p><strong><?php echo $report['reporter']; ?></strong> reported <strong><?php echo $report['agent']; ?></strong></p>
                                    <small><?php echo $report['date']; ?></small>
                                </div>
                                <span class="status-badge <?php echo getStatusColor($report['status']); ?>"><?php echo ucfirst($report['status']); ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 style="margin-bottom: 16px; font-size: 16px;">Platform Health</h3>
                    <div class="health-grid">
                        <div class="health-card">
                            <h4>New Agents This Week</h4>
                            <div class="health-number">12</div>
                            <div class="health-label">registered agents</div>
                        </div>
                        <div class="health-card">
                            <h4>New Listings This Week</h4>
                            <div class="health-number">28</div>
                            <div class="health-label">properties added</div>
                        </div>
                        <div class="health-card">
                            <h4>Reports Resolved</h4>
                            <div class="health-number">9</div>
                            <div class="health-label">out of 12 total</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Agent Approvals Tab -->
            <div class="tab-content" id="tab-approvals">
                <div class="filter-bar">
                    <select id="approvalStatusFilter">
                        <option value="all">All Status</option>
                        <option value="pending">Pending</option>
                        <option value="approved">Approved</option>
                        <option value="rejected">Rejected</option>
                    </select>
                    <input type="text" class="search-input" placeholder="Search by name, matric, or department..." id="approvalSearch">
                </div>

                <div class="table-card">
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th class="checkbox-cell"><input type="checkbox" id="selectAllApprovals"></th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Matric No</th>
                                    <th>Department</th>
                                    <th>Area</th>
                                    <th>Date Applied</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="approvalTableBody">
                                <?php foreach($agents as $agent): ?>
                                <tr data-status="<?php echo $agent['status']; ?>" data-search="<?php echo strtolower($agent['name'] . ' ' . $agent['matric'] . ' ' . $agent['department']); ?>">
                                    <td class="checkbox-cell"><input type="checkbox" class="approval-checkbox"></td>
                                    <td><div class="agent-photo"><?php echo $agent['photo']; ?></div></td>
                                    <td><?php echo $agent['name']; ?></td>
                                    <td><?php echo $agent['matric']; ?></td>
                                    <td><?php echo $agent['department']; ?></td>
                                    <td><?php echo $agent['area']; ?></td>
                                    <td><?php echo date('M d, Y', strtotime($agent['date_applied'])); ?></td>
                                    <td><span class="status-badge <?php echo getStatusColor($agent['status']); ?>"><?php echo ucfirst($agent['status']); ?></span></td>
                                    <td>
                                        <div class="action-btns">
                                            <button class="btn btn-primary" onclick="openAgentModal('<?php echo $agent['id']; ?>')">View Details</button>
                                            <?php if($agent['status'] === 'pending'): ?>
                                            <button class="btn btn-success" onclick="approveAgent('<?php echo $agent['id']; ?>')">Approve</button>
                                            <button class="btn btn-danger" onclick="rejectAgent('<?php echo $agent['id']; ?>')">Reject</button>
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Manage Agents Tab -->
            <div class="tab-content" id="tab-manage">
                <div class="filter-bar">
                    <select id="manageStatusFilter">
                        <option value="all">All Status</option>
                        <option value="approved">Approved</option>
                        <option value="pending">Pending</option>
                        <option value="rejected">Rejected</option>
                        <option value="suspended">Suspended</option>
                    </select>
                    <input type="text" class="search-input" placeholder="Search agents..." id="manageSearch">
                </div>

                <div class="table-card">
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Agent ID</th>
                                    <th>Department</th>
                                    <th>Area</th>
                                    <th>Status</th>
                                    <th>Joined</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="manageTableBody">
                                <?php foreach($agents as $agent): ?>
                                <tr data-status="<?php echo $agent['status']; ?>" data-search="<?php echo strtolower($agent['name'] . ' ' . $agent['id'] . ' ' . $agent['department']); ?>">
                                    <td><div class="agent-photo"><?php echo $agent['photo']; ?></div></td>
                                    <td><?php echo $agent['name']; ?></td>
                                    <td><?php echo $agent['id']; ?></td>
                                    <td><?php echo $agent['department']; ?></td>
                                    <td><?php echo $agent['area']; ?></td>
                                    <td><span class="status-badge <?php echo getStatusColor($agent['status']); ?>"><?php echo ucfirst($agent['status']); ?></span></td>
                                    <td><?php echo date('M d, Y', strtotime($agent['joined'])); ?></td>
                                    <td>
                                        <div class="action-btns">
                                            <button class="btn btn-primary" onclick="openAgentModal('<?php echo $agent['id']; ?>')">View</button>
                                            <button class="btn btn-outline">Edit</button>
                                            <?php if($agent['status'] === 'approved'): ?>
                                            <button class="btn btn-warning" onclick="suspendAgent('<?php echo $agent['id']; ?>')">Suspend</button>
                                            <?php endif; ?>
                                            <button class="btn btn-danger" onclick="deleteAgent('<?php echo $agent['id']; ?>')">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- House Listings Tab -->
            <div class="tab-content" id="tab-listings">
                <div class="filter-bar">
                    <select id="listingAreaFilter">
                        <option value="all">All Areas</option>
                        <option value="idi-aba">Idi-Aba</option>
                        <option value="abeokuta road">Abeokuta Road</option>
                        <option value="campus road">Campus Road</option>
                        <option value="obantoko">Obantoko</option>
                        <option value="lafenwa">Lafenwa</option>
                        <option value="odeda">Odeda</option>
                    </select>
                    <select id="listingStatusFilter">
                        <option value="all">All Status</option>
                        <option value="active">Active</option>
                        <option value="pending">Pending</option>
                        <option value="removed">Removed</option>
                    </select>
                </div>

                <div class="table-card">
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Agent</th>
                                    <th>Area</th>
                                    <th>Price</th>
                                    <th>Rooms</th>
                                    <th>Status</th>
                                    <th>Views</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="listingTableBody">
                                <?php foreach($listings as $listing): ?>
                                <tr data-status="<?php echo $listing['status']; ?>" data-area="<?php echo strtolower($listing['area']); ?>">
                                    <td><div class="listing-image"><?php echo $listing['image']; ?></div></td>
                                    <td><?php echo $listing['title']; ?></td>
                                    <td><?php echo $listing['agent']; ?></td>
                                    <td><?php echo $listing['area']; ?></td>
                                    <td><?php echo formatNaira($listing['price']); ?></td>
                                    <td><?php echo $listing['rooms']; ?></td>
                                    <td><span class="status-badge <?php echo getStatusColor($listing['status']); ?>"><?php echo ucfirst($listing['status']); ?></span></td>
                                    <td><?php echo number_format($listing['views']); ?></td>
                                    <td>
                                        <div class="action-btns">
                                            <button class="btn btn-primary">View</button>
                                            <button class="btn btn-outline">Edit</button>
                                            <button class="btn btn-danger">Remove</button>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Reports & Flags Tab -->
            <div class="tab-content" id="tab-reports">
                <div class="filter-bar">
                    <select id="reportStatusFilter">
                        <option value="all">All Status</option>
                        <option value="pending">Pending</option>
                        <option value="reviewed">Reviewed</option>
                        <option value="resolved">Resolved</option>
                    </select>
                </div>

                <div class="table-card">
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th>Reporter</th>
                                    <th>Agent Reported</th>
                                    <th>Issue Type</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="reportTableBody">
                                <?php foreach($reports as $report): ?>
                                <tr data-status="<?php echo $report['status']; ?>">
                                    <td><?php echo $report['reporter']; ?></td>
                                    <td><?php echo $report['agent']; ?></td>
                                    <td>
                                        <div style="display:flex; align-items:center; gap:8px;">
                                            <?php echo getReportTypeIcon($report['type']); ?>
                                            <?php echo $report['type']; ?>
                                        </div>
                                    </td>
                                    <td><?php echo date('M d, Y', strtotime($report['date'])); ?></td>
                                    <td><span class="status-badge <?php echo getStatusColor($report['status']); ?>"><?php echo ucfirst($report['status']); ?></span></td>
                                    <td>
                                        <div class="action-btns">
                                            <button class="btn btn-primary">View Details</button>
                                            <?php if($report['status'] === 'pending'): ?>
                                            <button class="btn btn-outline">Mark Reviewed</button>
                                            <button class="btn btn-success">Resolve</button>
                                            <button class="btn btn-warning">Suspend Agent</button>
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Settings Tab -->
            <div class="tab-content" id="tab-settings">
                <div class="table-card" style="padding: 32px;">
                    <h3 style="margin-bottom: 24px;">Platform Settings</h3>
                    <div style="display: grid; gap: 20px; max-width: 600px;">
                        <div class="detail-item">
                            <label>Platform Name</label>
                            <span>funaaBHub - FUNAAB Student Housing</span>
                        </div>
                        <div class="detail-item">
                            <label>Contact Email</label>
                            <span>admin@funaabhub.edu.ng</span>
                        </div>
                        <div class="detail-item">
                            <label>Auto-approve Agents</label>
                            <span>Disabled</span>
                        </div>
                        <div class="detail-item">
                            <label>Max Listings per Agent</label>
                            <span>10</span>
                        </div>
                        <div class="detail-item">
                            <label>Report Auto-escalation</label>
                            <span>After 7 days unresolved</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Agent Detail Modal -->
    <div class="modal-overlay" id="agentModal">
        <div class="modal">
            <div class="modal-header">
                <h2>Agent Details</h2>
                <button class="modal-close" onclick="closeAgentModal()">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                </button>
            </div>
            <div class="modal-body" id="modalBody">
                <!-- Content loaded via JS -->
            </div>
        </div>
    </div>

    <script>
        // Agent Data
        const agentsData = <?php echo json_encode($agents); ?>;

        // Tab Switching
        document.querySelectorAll('.nav-item').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                const tab = this.dataset.tab;
                if(tab) switchTab(tab);
            });
        });

        function switchTab(tabName) {
            document.querySelectorAll('.nav-item').forEach(nav => nav.classList.remove('active'));
            document.querySelectorAll('.tab-content').forEach(tab => tab.classList.remove('active'));

            const navItem = document.querySelector(`.nav-item[data-tab="${tabName}"]`);
            const tabContent = document.getElementById(`tab-${tabName}`);

            if(navItem) navItem.classList.add('active');
            if(tabContent) tabContent.classList.add('active');
        }

        // Sidebar Collapse
        document.getElementById('collapseBtn').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('collapsed');
        });

        // Agent Modal
        function openAgentModal(agentId) {
            const agent = agentsData.find(a => a.id === agentId);
            if(!agent) return;

            const statusColor = getStatusColorJS(agent.status);
            const modalBody = document.getElementById('modalBody');

            modalBody.innerHTML = `
                <div class="agent-profile">
                    <div class="agent-profile-photo">${agent.photo}</div>
                    <div class="agent-profile-info">
                        <h3>${agent.name}</h3>
                        <p>${agent.department} | ${agent.area}</p>
                    </div>
                </div>
                <div class="detail-grid">
                    <div class="detail-item">
                        <label>Matric Number</label>
                        <span>${agent.matric}</span>
                    </div>
                    <div class="detail-item">
                        <label>Phone Number</label>
                        <span>${agent.phone}</span>
                    </div>
                    <div class="detail-item">
                        <label>Area</label>
                        <span>${agent.area}</span>
                    </div>
                    <div class="detail-item">
                        <label>NIN/ID Status</label>
                        <span class="status-badge ${getStatusColorJS(agent.nin_status === 'Verified' ? 'approved' : agent.nin_status === 'Rejected' ? 'rejected' : 'pending')}">${agent.nin_status}</span>
                    </div>
                    <div class="detail-item">
                        <label>Caretaker</label>
                        <span>${agent.caretaker}</span>
                    </div>
                    <div class="detail-item">
                        <label>Status</label>
                        <span class="status-badge ${statusColor}">${agent.status.charAt(0).toUpperCase() + agent.status.slice(1)}</span>
                    </div>
                </div>
                <div class="documents-section">
                    <h4>Uploaded Documents</h4>
                    <div class="document-placeholder">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-bottom: 8px;"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                        <p>No documents uploaded</p>
                    </div>
                </div>
                <div class="modal-actions">
                    ${agent.status === 'pending' ? `
                        <button class="btn btn-success" onclick="approveAgent('${agent.id}'); closeAgentModal();">Approve Agent</button>
                        <button class="btn btn-danger" onclick="rejectAgent('${agent.id}'); closeAgentModal();">Reject Agent</button>
                    ` : ''}
                    <button class="btn btn-outline" style="flex: 0.5;">Request More Info</button>
                </div>
            `;

            document.getElementById('agentModal').classList.add('active');
        }

        function closeAgentModal() {
            document.getElementById('agentModal').classList.remove('active');
        }

        // Close modal on overlay click
        document.getElementById('agentModal').addEventListener('click', function(e) {
            if(e.target === this) closeAgentModal();
        });

        // Approval Filters
        document.getElementById('approvalStatusFilter').addEventListener('change', filterApprovals);
        document.getElementById('approvalSearch').addEventListener('input', filterApprovals);

        function filterApprovals() {
            const status = document.getElementById('approvalStatusFilter').value;
            const search = document.getElementById('approvalSearch').value.toLowerCase();

            document.querySelectorAll('#approvalTableBody tr').forEach(row => {
                const rowStatus = row.dataset.status;
                const rowSearch = row.dataset.search;

                const statusMatch = status === 'all' || rowStatus === status;
                const searchMatch = !search || rowSearch.includes(search);

                row.style.display = (statusMatch && searchMatch) ? '' : 'none';
            });
        }

        // Manage Filters
        document.getElementById('manageStatusFilter').addEventListener('change', filterManage);
        document.getElementById('manageSearch').addEventListener('input', filterManage);

        function filterManage() {
            const status = document.getElementById('manageStatusFilter').value;
            const search = document.getElementById('manageSearch').value.toLowerCase();

            document.querySelectorAll('#manageTableBody tr').forEach(row => {
                const rowStatus = row.dataset.status;
                const rowSearch = row.dataset.search;

                const statusMatch = status === 'all' || rowStatus === status;
                const searchMatch = !search || rowSearch.includes(search);

                row.style.display = (statusMatch && searchMatch) ? '' : 'none';
            });
        }

        // Listing Filters
        document.getElementById('listingAreaFilter').addEventListener('change', filterListings);
        document.getElementById('listingStatusFilter').addEventListener('change', filterListings);

        function filterListings() {
            const area = document.getElementById('listingAreaFilter').value;
            const status = document.getElementById('listingStatusFilter').value;

            document.querySelectorAll('#listingTableBody tr').forEach(row => {
                const rowArea = row.dataset.area;
                const rowStatus = row.dataset.status;

                const areaMatch = area === 'all' || rowArea === area;
                const statusMatch = status === 'all' || rowStatus === status;

                row.style.display = (areaMatch && statusMatch) ? '' : 'none';
            });
        }

        // Report Filters
        document.getElementById('reportStatusFilter').addEventListener('change', filterReports);

        function filterReports() {
            const status = document.getElementById('reportStatusFilter').value;

            document.querySelectorAll('#reportTableBody tr').forEach(row => {
                const rowStatus = row.dataset.status;
                const statusMatch = status === 'all' || rowStatus === status;
                row.style.display = statusMatch ? '' : 'none';
            });
        }

        // Select All Checkbox
        document.getElementById('selectAllApprovals').addEventListener('change', function() {
            const checked = this.checked;
            document.querySelectorAll('.approval-checkbox').forEach(cb => cb.checked = checked);
        });

        // Agent Actions
        function approveAgent(id) {
            alert('Agent ' + id + ' has been approved!');
            location.reload();
        }

        function rejectAgent(id) {
            if(confirm('Are you sure you want to reject this agent?')) {
                alert('Agent ' + id + ' has been rejected.');
                location.reload();
            }
        }

        function suspendAgent(id) {
            if(confirm('Are you sure you want to suspend this agent?')) {
                alert('Agent ' + id + ' has been suspended.');
                location.reload();
            }
        }

        function deleteAgent(id) {
            if(confirm('Are you sure you want to delete this agent? This action cannot be undone.')) {
                alert('Agent ' + id + ' has been deleted.');
                location.reload();
            }
        }

        // Helper
        function getStatusColorJS(status) {
            switch(status) {
                case 'approved': case 'active': case 'resolved': return 'green';
                case 'pending': case 'reviewed': return 'yellow';
                case 'rejected': case 'removed': return 'red';
                case 'suspended': return 'orange';
                default: return '';
            }
        }
    </script>
</body>
</html>
