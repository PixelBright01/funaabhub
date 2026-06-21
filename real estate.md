# Product Requirements Document
## Student Housing & Agent Registration Platform
**Commissioned by:** Student Union Government (SUG) Welfare Directorate
**Prepared by:** PixelHub (Olamilekan)
**Version:** 1.0
**Date:** June 21, 2026

---

## 1. Overview

A WordPress-based digital platform that registers and verifies house agents operating around the student community, and gives students a safe, centralized way to find off-campus accommodation through verified agents only.

The platform exists to bring accountability to an informal, often exploitative housing market. Today, students find agents through word-of-mouth or unverified flyers, with no way to confirm who an agent is, whether they're legitimate, or whether they've been reported for scams. This platform replaces that with a registry the SUG welfare office controls and vets.

## 2. Problem Statement

- House agents currently operate with no central registry, no verification, and no accountability.
- Students face scams and extortion from agents posing as legitimate, often demanding inflated fees or disappearing after payment.
- There is no way to distinguish a verified, union-recognized agent from an opportunistic outsider.
- Caretakers and agents are not cross-checked against any institutional record (matric number, department, NIN/ID).

## 3. Goals

- Give every legitimate house agent a verifiable digital identity tied to their matric number and department.
- Let students browse and filter agents/listings by area of coverage before engaging anyone physically.
- Reduce extortion and impersonation by making agent identity (photo, ID, matric number) publicly checkable.
- Give the SUG welfare office a single dashboard to approve, reject, or suspend agents.
- Launch fast using WordPress templates/plugins rather than custom-built infrastructure, to meet the pre-resumption deadline.

## 4. Out of Scope (v1)

- Online rent payment or escrow handling
- In-app messaging/chat between students and agents
- Automated background checks beyond manual NIN/ID and matric number verification by SUG staff
- Mobile app (web-only, mobile-responsive)

## 5. User Roles

| Role | Description |
|------|-------------|
| **Student (Visitor)** | Browses agents and listings, no login required to view; may need to log in to report a scam or save favorites |
| **Agent (Registered User)** | Registers, submits verification documents, manages their own listings via a frontend dashboard |
| **Caretaker** | Linked to a property/area, verified via NIN/ID and office details; may or may not have platform login depending on technical decision in section 8 |
| **SUG Welfare Admin** | Reviews and approves/rejects agent applications, manages disputes, has full WP admin access |

## 6. Core Features

### 6.1 Agent Registration
- Public-facing registration form collecting:
  - Full name
  - Matric number
  - Department
  - Area(s) of coverage (e.g., Camp, Harmony, and other defined zones)
  - Phone number / WhatsApp contact
  - Photo upload (face photo, for identity verification)
  - NIN or valid ID upload
  - Linked caretaker/office information (name, office location, NIN or ID)
- Submissions enter a **Pending** status until reviewed by SUG admin.
- Agent receives email/notification on approval or rejection.

### 6.2 Agent Verification & Approval Workflow
- Admin dashboard view of all pending, approved, and rejected agents.
- Admin can view uploaded ID/NIN and photo before approving.
- Approved agents receive a unique **Agent ID** and a verification badge visible on their public profile.
- Rejected or suspended agents are flagged and hidden from public listings.

### 6.3 Public Agent Directory
- Searchable, filterable list of all approved agents.
- Filters: area of coverage, department.
- Each agent card shows: photo, name, matric number (partially masked for privacy if needed), area of coverage, verification badge.

### 6.4 Agent Profile Page
- Full profile per agent: photo, verified badge, matric number, department, area of coverage, caretaker/office info, contact method.
- Optionally lists the agent's active house listings.

### 6.5 House Listings
- Agents (once approved) can create listings via their frontend dashboard.
- Listing fields: title, area/location, price, number of rooms, photos, description, linked agent (auto-filled).
- Public listing directory, filterable by area and price range.

### 6.6 Report a Scam / Verify an Agent
- Simple public form: student enters an agent's name or Agent ID to confirm legitimacy.
- Separate "Report an Issue" form for flagging suspicious or extortionate behavior, routed to SUG admin for review.

### 6.7 SUG Admin Dashboard
- Central place to manage agent approvals, view reports/flags, and suspend agents if needed.
- Built on standard WP admin, extended with custom fields/views (see Technical Approach).

## 7. Pages

1. Home — platform purpose, anti-scam messaging, how it works
2. Find an Agent (directory, filterable)
3. Agent Profile (single)
4. House Listings (directory, filterable)
5. House Listing (single)
6. Register as an Agent (form)
7. Agent Dashboard (frontend, logged-in agents only)
8. Report a Scam / Verify an Agent
9. How It Works / Safety Guide
10. SUG Admin Verification Panel (internal, WP admin-based)
11. Contact / SUG Welfare Office
12. About / Student Union

## 8. Technical Approach

| Layer | Tool |
|-------|------|
| Core CMS | WordPress |
| Theme | Astra or GeneratePress (lightweight, Elementor-friendly) |
| Page builder | Elementor Pro |
| Registration, frontend login, custom fields | ProfilePress (Pro) |
| Custom post types & relationships (Agent ↔ House ↔ Area) | JetEngine or Pods |
| Listing search/filter | JetSmartFilters (paired with JetEngine) |
| Extra custom fields beyond ProfilePress | Advanced Custom Fields (ACF) |
| Custom PHP logic (e.g., auto-generated Agent ID, matric number validation) | Code Snippets |
| Scam report / contact forms | WPForms or Fluent Forms |
| ID card generation on approval (if required) | Custom PHP using FPDF/TCPDF, triggered on status change to Approved |

**Open technical decision:** whether caretakers get their own registered profile/login or are simply stored as a linked field on the agent's profile. Recommend the latter for v1 to reduce build complexity — caretaker info as structured fields on the Agent post type, not a separate user role.

## 9. Data Model (high level)

- **Agent** (Custom Post Type): name, matric number, department, area(s) of coverage, photo, NIN/ID file, caretaker name, caretaker office, caretaker NIN/ID, status (pending/approved/rejected/suspended), Agent ID (auto-generated on approval)
- **House Listing** (Custom Post Type): title, area, price, rooms, photos, description, relationship field → Agent
- **Area** (Taxonomy or CPT): name (e.g., Camp, Harmony), used for filtering across Agents and Listings
- **Report** (Form submission, stored as CPT or via form plugin's entry log): reporter contact (optional), agent referenced, description, status

## 10. Success Metrics

- Number of agents registered and approved before resumption
- Number of listings published at launch
- Reduction in scam reports over the first semester (qualitative, tracked via the Report form)
- SUG admin able to fully manage approvals without developer intervention

## 11. Timeline Constraint

Must be delivered **before resumption**. Given this, recommend:
- Week 1: Core setup (theme, plugins, CPTs, relationships)
- Week 2: Registration form, approval workflow, agent directory
- Week 3: Listings, filters, report form, content/copy
- Week 4: SUG admin walkthrough, fixes, launch

## 12. Open Questions

- Does the SUG welfare office want public visibility of matric numbers in full, or masked for privacy?
- Should caretakers have their own login/dashboard in v1, or remain a static field under each agent?
- Who hosts and maintains the site post-launch — SUG, or PixelHub on a maintenance retainer?
- Is there a budget for premium plugins (ProfilePress Pro, JetEngine, Elementor Pro), or should v1 use free-tier equivalents?
