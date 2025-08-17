function contactMe() {
  var msg1 =
    "Hello! What would you like to discuss?\n- WEBSITE\n- MAINTENANCE\n- SEO\n- CONSULTATION\n- OTHER";
  var reason = prompt(msg1);

  if (!reason) {
    alert("No input provided. Goodbye!");
    return;
  }

  reason = reason.trim().toUpperCase();

  if (reason === "WEBSITE") {
    var msg2 =
      "Great! What type of website are you looking for?\n- Personal Portfolio\n- Business Website\n- E-Commerce Store\n- Blog";
    var siteType = prompt(msg2);
    if (siteType) {
      siteType = siteType.trim();
      alert(
        "Awesome choice! A " +
          siteType +
          " is a great idea. Please share your requirements via email."
      );
    } else {
      alert("No website type provided.");
    }
  } else if (reason === "MAINTENANCE") {
    var msg3 =
      "What kind of maintenance do you need?\n- Fix Bugs\n- Update Content\n- Security Improvements\n- Performance Optimization";
    var maintenanceType = prompt(msg3);
    if (maintenanceType) {
      maintenanceType = maintenanceType.trim();
      alert(
        "Noted! I can help with " +
          maintenanceType +
          ". Please provide project details."
      );
    } else {
      alert("No maintenance type provided.");
    }
  } else if (reason === "SEO") {
    var msg4 =
      "What SEO service are you interested in?\n- On-page SEO\n- Off-page SEO\n- Keyword Research\n- Site Audit";
    var seoType = prompt(msg4);
    if (seoType) {
      seoType = seoType.trim();
      alert(
        "Thank you! I can assist with " + seoType + ". Let's discuss further."
      );
    } else {
      alert("No SEO type provided.");
    }
  } else if (reason === "CONSULTATION") {
    var msg5 =
      "What do you need consultation for?\n- Project Planning\n- Technology Stack\n- Design Suggestions\n- Career Guidance";
    var consultType = prompt(msg5);
    if (consultType) {
      consultType = consultType.trim();
      alert(
        "Perfect! I’ll be glad to guide you on " +
          consultType +
          ". Please schedule a call."
      );
    } else {
      alert("No consultation type provided.");
    }
  } else if (reason === "OTHER") {
    var msg6 = "Please describe your reason for contacting me:";
    var otherReason = prompt(msg6);
    if (otherReason) {
      alert(
        "Thanks for sharing: " + otherReason + ". I’ll get back to you soon!"
      );
    } else {
      alert("No details provided.");
    }
  } else {
    alert("Thank you for reaching out!");
  }
}

contactMe();
