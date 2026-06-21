<?php $activePage = 'home'; include 'includes/navbar.php'; ?>

<!-- HERO -->
<section class="hero">
  <div class="hero__overlay"></div>
  <div class="container hero__content">
    <h1 class="hero__title">Find Verified Housing Agents<br>You Can Trust</h1>
    <p class="hero__subtitle">The SUG-backed platform connecting students with vetted, verified house agents — eliminating scams and extortion.</p>
    <div class="hero__search">
      <div class="hero__search-group">
        <label for="hero-area">Area</label>
        <select id="hero-area">
          <option value="">All Areas</option>
          <option value="camp">Camp</option>
          <option value="harmony">Harmony</option>
          <option value="gateway">Gateway</option>
          <option value="aluta">Aluta</option>
          <option value="campus-extension">Campus Extension</option>
        </select>
      </div>
      <div class="hero__search-group">
        <label for="hero-dept">Department</label>
        <select id="hero-dept">
          <option value="">All Departments</option>
          <option>Computer Science</option>
          <option>Engineering</option>
          <option>Law</option>
          <option>Medicine</option>
          <option>Business Admin</option>
        </select>
      </div>
      <a href="find-agent.html" class="btn btn--cta hero__search-btn">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
        Search
      </a>
    </div>
  </div>
</section>

<!-- VERIFIED AGENTS -->
<section class="section" id="agents">
  <div class="container">
    <h2 class="section__title">Verified Agents</h2>
    <p class="section__subtitle">Browse SUG-approved housing agents verified through matric number, NIN, and ID checks.</p>
    <div class="agents__filters">
      <button class="filter-pill is-active" data-area="all">All</button>
      <button class="filter-pill" data-area="camp">Camp</button>
      <button class="filter-pill" data-area="harmony">Harmony</button>
      <button class="filter-pill" data-area="gateway">Gateway</button>
      <button class="filter-pill" data-area="aluta">Aluta</button>
    </div>
    <div class="agents__grid">
      <div class="agent-card" data-area="camp">
        <div class="agent-card__image"><img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Adebayo Johnson"><span class="agent-card__badge">Verified</span></div>
        <div class="agent-card__body">
          <h3 class="agent-card__name">Adebayo Johnson</h3>
          <p class="agent-card__matric">Matric: 20/25/0001</p>
          <p class="agent-card__dept">Computer Science</p>
          <div class="agent-card__meta"><span class="agent-card__area"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> Camp</span><span class="agent-card__id">AGT-0012</span></div>
          <a href="find-agent.html" class="btn btn--outline btn--sm">View Profile</a>
        </div>
      </div>
      <div class="agent-card" data-area="harmony">
        <div class="agent-card__image"><img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Chioma Okafor"><span class="agent-card__badge">Verified</span></div>
        <div class="agent-card__body">
          <h3 class="agent-card__name">Chioma Okafor</h3>
          <p class="agent-card__matric">Matric: 20/25/0045</p>
          <p class="agent-card__dept">Law</p>
          <div class="agent-card__meta"><span class="agent-card__area"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> Harmony</span><span class="agent-card__id">AGT-0045</span></div>
          <a href="find-agent.html" class="btn btn--outline btn--sm">View Profile</a>
        </div>
      </div>
      <div class="agent-card" data-area="camp">
        <div class="agent-card__image"><img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Fatimah Bello"><span class="agent-card__badge">Verified</span></div>
        <div class="agent-card__body">
          <h3 class="agent-card__name">Fatimah Bello</h3>
          <p class="agent-card__matric">Matric: 21/25/0112</p>
          <p class="agent-card__dept">Business Admin</p>
          <div class="agent-card__meta"><span class="agent-card__area"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> Camp</span><span class="agent-card__id">AGT-0112</span></div>
          <a href="find-agent.html" class="btn btn--outline btn--sm">View Profile</a>
        </div>
      </div>
      <div class="agent-card" data-area="gateway">
        <div class="agent-card__image"><img src="https://randomuser.me/api/portraits/men/22.jpg" alt="Emeka Nwosu"><span class="agent-card__badge">Verified</span></div>
        <div class="agent-card__body">
          <h3 class="agent-card__name">Emeka Nwosu</h3>
          <p class="agent-card__matric">Matric: 19/25/0078</p>
          <p class="agent-card__dept">Engineering</p>
          <div class="agent-card__meta"><span class="agent-card__area"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> Gateway</span><span class="agent-card__id">AGT-0078</span></div>
          <a href="find-agent.html" class="btn btn--outline btn--sm">View Profile</a>
        </div>
      </div>
      <div class="agent-card" data-area="aluta">
        <div class="agent-card__image"><img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Aisha Abdullahi"><span class="agent-card__badge">Verified</span></div>
        <div class="agent-card__body">
          <h3 class="agent-card__name">Aisha Abdullahi</h3>
          <p class="agent-card__matric">Matric: 22/25/0203</p>
          <p class="agent-card__dept">Medicine</p>
          <div class="agent-card__meta"><span class="agent-card__area"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> Aluta</span><span class="agent-card__id">AGT-0203</span></div>
          <a href="find-agent.html" class="btn btn--outline btn--sm">View Profile</a>
        </div>
      </div>
      <div class="agent-card" data-area="harmony">
        <div class="agent-card__image"><img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Oluwaseun Adeyemi"><span class="agent-card__badge">Verified</span></div>
        <div class="agent-card__body">
          <h3 class="agent-card__name">Oluwaseun Adeyemi</h3>
          <p class="agent-card__matric">Matric: 20/25/0056</p>
          <p class="agent-card__dept">Computer Science</p>
          <div class="agent-card__meta"><span class="agent-card__area"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> Harmony</span><span class="agent-card__id">AGT-0056</span></div>
          <a href="find-agent.html" class="btn btn--outline btn--sm">View Profile</a>
        </div>
      </div>
      <div class="agent-card" data-area="camp">
        <div class="agent-card__image"><img src="https://randomuser.me/api/portraits/women/33.jpg" alt="Blessing Eze"><span class="agent-card__badge">Verified</span></div>
        <div class="agent-card__body">
          <h3 class="agent-card__name">Blessing Eze</h3>
          <p class="agent-card__matric">Matric: 21/25/0089</p>
          <p class="agent-card__dept">Law</p>
          <div class="agent-card__meta"><span class="agent-card__area"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> Camp</span><span class="agent-card__id">AGT-0089</span></div>
          <a href="find-agent.html" class="btn btn--outline btn--sm">View Profile</a>
        </div>
      </div>
      <div class="agent-card" data-area="gateway">
        <div class="agent-card__image"><img src="https://randomuser.me/api/portraits/men/56.jpg" alt="Yusuf Bakare"><span class="agent-card__badge">Verified</span></div>
        <div class="agent-card__body">
          <h3 class="agent-card__name">Yusuf Bakare</h3>
          <p class="agent-card__matric">Matric: 20/25/0167</p>
          <p class="agent-card__dept">Engineering</p>
          <div class="agent-card__meta"><span class="agent-card__area"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> Gateway</span><span class="agent-card__id">AGT-0167</span></div>
          <a href="find-agent.html" class="btn btn--outline btn--sm">View Profile</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- COVERAGE AREAS -->
<section class="section" id="listings">
  <div class="container">
    <h2 class="section__title">Coverage Areas</h2>
    <p class="section__subtitle">Find verified agents in your preferred area around the student community.</p>
    <div class="areas__grid">
      <a href="find-agent.html" class="area-card"><img src="https://picsum.photos/seed/camp/800/600" alt="Camp"><div class="area-card__overlay"><h3>Camp</h3><p>24 Agents</p></div></a>
      <a href="find-agent.html" class="area-card"><img src="https://picsum.photos/seed/harmony/800/600" alt="Harmony"><div class="area-card__overlay"><h3>Harmony</h3><p>18 Agents</p></div></a>
      <a href="find-agent.html" class="area-card"><img src="https://picsum.photos/seed/gateway/800/600" alt="Gateway"><div class="area-card__overlay"><h3>Gateway</h3><p>15 Agents</p></div></a>
      <a href="find-agent.html" class="area-card"><img src="https://picsum.photos/seed/aluta/800/600" alt="Aluta"><div class="area-card__overlay"><h3>Aluta</h3><p>12 Agents</p></div></a>
      <a href="find-agent.html" class="area-card"><img src="https://picsum.photos/seed/campus-ext/800/600" alt="Campus Extension"><div class="area-card__overlay"><h3>Campus Extension</h3><p>20 Agents</p></div></a>
    </div>
  </div>
</section>

<!-- WHY FUNAABHUB -->
<section class="section" style="background:var(--surface)">
  <div class="container">
    <h2 class="section__title">Why funaabhub</h2>
    <p class="section__subtitle">Three reasons students trust our platform over word-of-mouth and random flyers.</p>
    <div class="why__grid">
      <div class="why-card">
        <div class="why-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg></div>
        <h3>Verified Agents</h3>
        <p>Every agent is verified through matric number, NIN/ID, and department records before being approved.</p>
      </div>
      <div class="why-card">
        <div class="why-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg></div>
        <h3>SUG Backed</h3>
        <p>Endorsed and managed by the Student Union Government Welfare Directorate for full accountability.</p>
      </div>
      <div class="why-card">
        <div class="why-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/><circle cx="12" cy="16" r="1"/></svg></div>
        <h3>Student Safe</h3>
        <p>Report scams instantly, check agent legitimacy before engaging, and access a trusted housing network.</p>
      </div>
    </div>
  </div>
</section>

<!-- ABOUT -->
<section class="section" id="about">
  <div class="container about__inner">
    <div class="about__content">
      <h2 class="section__title section__title--left">About the Initiative</h2>
      <p>funaabhub was created by the SUG Welfare Directorate to bring accountability to the informal and often exploitative housing market around the student community.</p>
      <p>Today, students find agents through word-of-mouth or unverified flyers, with no way to confirm who an agent is, whether they're legitimate, or whether they've been reported for scams.</p>
      <blockquote class="about__quote">"Every student deserves to find housing without fear of scams or extortion. This platform is our commitment to making that a reality."<cite>— SUG Welfare Director</cite></blockquote>
    </div>
    <div class="about__image"><img src="https://picsum.photos/seed/sug-welfare/600/400" alt="SUG Welfare Office"></div>
  </div>
</section>

<!-- TEAM -->
<section class="section" style="background:var(--surface)">
  <div class="container">
    <h2 class="section__title">SUG Welfare Team</h2>
    <p class="section__subtitle">The people behind the verification and student welfare efforts.</p>
    <div class="team__grid">
      <div class="team-card"><div class="team-card__image"><img src="https://randomuser.me/api/portraits/men/90.jpg" alt=""></div><h3 class="team-card__name">Comrade Abdulrahman</h3><p class="team-card__role">SUG Welfare Director</p></div>
      <div class="team-card"><div class="team-card__image"><img src="https://randomuser.me/api/portraits/women/28.jpg" alt=""></div><h3 class="team-card__name">Comrade Blessing</h3><p class="team-card__role">Deputy Welfare Director</p></div>
      <div class="team-card"><div class="team-card__image"><img src="https://randomuser.me/api/portraits/men/41.jpg" alt=""></div><h3 class="team-card__name">Comrade Tunde</h3><p class="team-card__role">Verification Officer</p></div>
      <div class="team-card"><div class="team-card__image"><img src="https://randomuser.me/api/portraits/women/52.jpg" alt=""></div><h3 class="team-card__name">Comrade Nneka</h3><p class="team-card__role">Student Liaison Officer</p></div>
    </div>
  </div>
</section>

<!-- STATS + HOW IT WORKS -->
<section class="section stats" id="how-it-works">
  <div class="container">
    <div class="stats__row">
      <div class="stat"><span class="stat__number" data-target="89">0</span><span class="stat__label">Agents Registered</span></div>
      <div class="stat"><span class="stat__number" data-target="156">0</span><span class="stat__label">Listings Published</span></div>
      <div class="stat"><span class="stat__number" data-target="2400">0</span><span class="stat__label">Students Helped</span></div>
      <div class="stat"><span class="stat__number">0</span><span class="stat__label">Scam Tolerance</span></div>
    </div>
    <div class="how-it-works">
      <h2 class="section__title">How Verification Works</h2>
      <p class="section__subtitle">A simple 3-step process to become a verified agent.</p>
      <div class="steps__grid">
        <div class="step"><div class="step__number">1</div><h3>Register</h3><p>Fill out the registration form with your matric number, department, NIN/ID, and area of coverage.</p></div>
        <div class="step"><div class="step__number">2</div><h3>Verify</h3><p>SUG Welfare office reviews your documents and cross-checks your matric number and NIN.</p></div>
        <div class="step"><div class="step__number">3</div><h3>Get Listed</h3><p>Once approved, you receive a unique Agent ID, a verification badge, and can create listings.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- REGISTER -->
<section class="section" id="register">
  <div class="container">
    <h2 class="section__title">Register as an Agent</h2>
    <p class="section__subtitle">Submit your details for SUG verification. Approval takes 24-48 hours.</p>
    <form class="register-form" id="registerForm">
      <div class="form-row">
        <div class="form-group"><label>Full Name *</label><input type="text" required placeholder="e.g. Adebayo Johnson"></div>
        <div class="form-group"><label>Matric Number *</label><input type="text" required placeholder="e.g. 20/25/0001"></div>
      </div>
      <div class="form-row">
        <div class="form-group"><label>Department *</label><select required><option value="">Select Department</option><option>Computer Science</option><option>Engineering</option><option>Law</option><option>Medicine</option><option>Business Admin</option></select></div>
        <div class="form-group"><label>Area of Coverage *</label><select required><option value="">Select Area</option><option>Camp</option><option>Harmony</option><option>Gateway</option><option>Aluta</option><option>Campus Extension</option></select></div>
      </div>
      <div class="form-row">
        <div class="form-group"><label>Phone / WhatsApp *</label><input type="tel" required placeholder="e.g. 08012345678"></div>
        <div class="form-group"><label>Upload Photo *</label><input type="file" accept="image/*" required></div>
      </div>
      <div class="form-row">
        <div class="form-group"><label>NIN or Valid ID *</label><input type="file" accept="image/*,.pdf" required></div>
        <div class="form-group"><label>Caretaker / Office Name</label><input type="text" placeholder="e.g. Alhaji Mustapha"></div>
      </div>
      <div class="form-group"><label>Caretaker Office Location</label><input type="text" placeholder="e.g. Camp Axis, behind Main Gate"></div>
      <button type="submit" class="btn btn--cta btn--full">Submit for Verification</button>
    </form>
  </div>
</section>

<!-- STUDENT DASHBOARD PREVIEW -->
<section class="section dashboard-preview" id="student-dashboard">
  <div class="container">
    <div class="dashboard-preview__inner">
      <div class="dashboard-preview__content">
        <span class="dashboard-preview__tag">For Students</span>
        <h2>Student Dashboard</h2>
        <p>Save your favorite agents, track listings, and report suspicious activity — all in one place.</p>
        <ul class="dashboard-preview__features">
          <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><path d="m20 6-11 11-5-5"/></svg> Browse and filter verified agents by area</li>
          <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><path d="m20 6-11 11-5-5"/></svg> Save favorite agents and listings</li>
          <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><path d="m20 6-11 11-5-5"/></svg> Verify an agent's legitimacy instantly</li>
          <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><path d="m20 6-11 11-5-5"/></svg> Report scams or suspicious agents</li>
        </ul>
        <a href="student-dashboard.php" class="btn btn--primary">Go to Student Dashboard</a>
      </div>
      <div class="dashboard-preview__image"><img src="https://picsum.photos/seed/student-dash/500/350" alt="Student Dashboard"></div>
    </div>
  </div>
</section>

<!-- ADMIN DASHBOARD PREVIEW -->
<section class="section dashboard-preview dashboard-preview--alt" id="admin-dashboard">
  <div class="container">
    <div class="dashboard-preview__inner dashboard-preview__inner--reverse">
      <div class="dashboard-preview__content">
        <span class="dashboard-preview__tag">For SUG Admin</span>
        <h2>Admin Dashboard</h2>
        <p>Full control over agent approvals, dispute management, and platform oversight.</p>
        <ul class="dashboard-preview__features">
          <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><path d="m20 6-11 11-5-5"/></svg> Review and approve/reject agent applications</li>
          <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><path d="m20 6-11 11-5-5"/></svg> View uploaded NIN/ID and photo for verification</li>
          <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><path d="m20 6-11 11-5-5"/></svg> Manage scam reports and suspend agents</li>
          <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><path d="m20 6-11 11-5-5"/></svg> Auto-generate Agent IDs on approval</li>
        </ul>
        <a href="admin-dashboard.php" class="btn btn--primary">Go to Admin Dashboard</a>
      </div>
      <div class="dashboard-preview__image"><img src="https://picsum.photos/seed/admin-dash/500/350" alt="Admin Dashboard"></div>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section class="section" id="contact">
  <div class="container contact__inner">
    <div class="contact__info">
      <h2 class="section__title section__title--left">Get In Touch</h2>
      <p>Have questions about verification or need to report an issue? Reach out to us.</p>
      <div class="contact__details">
        <div class="contact__detail"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg><span>+234 801 234 5678</span></div>
        <div class="contact__detail"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg><span>welfare@sug.funaab.edu.ng</span></div>
        <div class="contact__detail"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg><span>SUG Welfare Office, Student Union Building, FUNAAB</span></div>
      </div>
    </div>
    <form class="contact__form" id="contactForm">
      <div class="form-group"><label>Full Name *</label><input type="text" required placeholder="Your full name"></div>
      <div class="form-group"><label>Email Address *</label><input type="email" required placeholder="your@email.com"></div>
      <div class="form-group"><label>Subject *</label><select required><option value="">Select...</option><option>Agent Verification Inquiry</option><option>Report a Scam</option><option>General Question</option></select></div>
      <div class="form-group"><label>Message *</label><textarea rows="5" required placeholder="Tell us how we can help..."></textarea></div>
      <button type="submit" class="btn btn--cta btn--full">Send Message</button>
    </form>
  </div>
</section>

<!-- SAFETY TIPS -->
<section class="section" style="background:var(--surface)">
  <div class="container">
    <h2 class="section__title">Safety Tips & Guides</h2>
    <p class="section__subtitle">Stay informed. Protect yourself from housing scams.</p>
    <div class="blog__grid">
      <a href="how-it-works.html" class="blog-card"><div class="blog-card__image"><img src="https://picsum.photos/seed/scam-guide/600/400" alt=""></div><div class="blog-card__body"><span class="blog-card__date">Safety Guide</span><h3>How to Identify Fake Housing Agents</h3><p>Learn the red flags that indicate an agent may not be legitimate.</p></div></a>
      <a href="how-it-works.html" class="blog-card"><div class="blog-card__image"><img src="https://picsum.photos/seed/checklist/600/400" alt=""></div><div class="blog-card__body"><span class="blog-card__date">Checklist</span><h3>Student Housing Checklist</h3><p>A complete checklist before signing any rental agreement.</p></div></a>
      <a href="how-it-works.html" class="blog-card"><div class="blog-card__image"><img src="https://picsum.photos/seed/rights/600/400" alt=""></div><div class="blog-card__body"><span class="blog-card__date">Know Your Rights</span><h3>Know Your Rights as a Student Renter</h3><p>What agents can and cannot legally demand from you.</p></div></a>
      <a href="report-scam.html" class="blog-card"><div class="blog-card__image"><img src="https://picsum.photos/seed/report/600/400" alt=""></div><div class="blog-card__body"><span class="blog-card__date">Action Guide</span><h3>How to Report a Suspicious Agent</h3><p>Step-by-step guide on reporting agents and protecting students.</p></div></a>
    </div>
  </div>
</section>

<!-- VERIFY / REPORT -->
<section class="section" id="report">
  <div class="container">
    <h2 class="section__title">Verify or Report an Agent</h2>
    <p class="section__subtitle">Check if an agent is verified, or report suspicious behavior.</p>
    <div class="report__grid">
      <div class="report-card">
        <div class="report-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/><path d="m9 12 2 2 4-4"/></svg></div>
        <h3>Verify an Agent</h3>
        <p>Enter an agent's name or Agent ID to confirm their status.</p>
        <form class="report-card__form"><input type="text" placeholder="Agent Name or ID (e.g. AGT-0012)"><button type="submit" class="btn btn--primary btn--sm">Verify</button></form>
      </div>
      <div class="report-card">
        <div class="report-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"/><line x1="4" y1="22" x2="4" y2="15"/></svg></div>
        <h3>Report a Scam</h3>
        <p>Flag suspicious behavior. All reports reviewed by SUG Welfare.</p>
        <form class="report-card__form"><input type="text" placeholder="Agent Name or ID"><textarea rows="3" placeholder="Describe the issue..."></textarea><button type="submit" class="btn btn--primary btn--sm">Submit Report</button></form>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
