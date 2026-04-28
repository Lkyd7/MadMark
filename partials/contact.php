<?php
include 'partials/header.php';
?>

<section class="relative bg-gray-950 text-white overflow-hidden min-h-screen">
  <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1511512578047-dfb367046420')] bg-cover bg-center opacity-20"></div>
  <div class="relative max-w-6xl mx-auto px-6 py-20 lg:py-24">
    <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
      <div class="space-y-6">
        <p class="text-sm uppercase tracking-[0.3em] text-purple-400">Contact</p>
        <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight">
          Need help or have a question?
        </h1>
        <p class="max-w-xl text-gray-300 text-lg">
          Reach out to us for support, feedback, product inquiries, or anything else. Our team is ready to help with orders, returns, technical questions, and special requests.
        </p>

        <div class="grid gap-4 sm:grid-cols-2">
          <div class="rounded-3xl bg-white/10 p-6 border border-white/10 shadow-xl">
            <h2 class="text-xl font-semibold text-white mb-3">Email</h2>
            <p class="text-gray-300">support@madmark.store</p>
          </div>
          <div class="rounded-3xl bg-white/10 p-6 border border-white/10 shadow-xl">
            <h2 class="text-xl font-semibold text-white mb-3">Need urgent support?</h2>
            <p class="text-gray-300">Use the form and we’ll respond within one business day.</p>
          </div>
        </div>
      </div>

      <div class="rounded-[2rem] border border-white/10 bg-gray-900/90 p-8 shadow-2xl backdrop-blur-xl">
        <div class="mb-8">
          <p class="text-sm font-semibold uppercase tracking-[0.3em] text-purple-400">Send us a message</p>
          <h2 class="mt-4 text-3xl font-bold text-white">Contact Form</h2>
          <p class="mt-3 text-gray-400">Tell us what you need and we’ll get back to you as soon as possible.</p>
        </div>

        <?php
        $success = false;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = trim($_POST['name'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $subject = trim($_POST['subject'] ?? '');
            $message = trim($_POST['message'] ?? '');

            if ($name && $email && $message) {
                $success = true;
            }
        }
        ?>

        <?php if ($success): ?>
          <div class="rounded-3xl bg-emerald-500/10 border border-emerald-300/20 p-6 mb-6 text-emerald-100">
            <h3 class="text-xl font-semibold">Message sent!</h3>
            <p class="mt-2 text-sm text-gray-200">Thanks for reaching out, we’ll get back to you shortly.</p>
          </div>
        <?php endif; ?>

        <form method="post" action="contact.php" class="space-y-5">
          <div>
            <label class="block text-sm font-medium text-gray-200" for="name">Name</label>
            <input id="name" name="name" type="text" required class="mt-2 w-full rounded-3xl border border-white/10 bg-gray-950/80 px-4 py-3 text-white placeholder:text-gray-500 focus:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-500/30" placeholder="Your name">
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-200" for="email">Email</label>
            <input id="email" name="email" type="email" required class="mt-2 w-full rounded-3xl border border-white/10 bg-gray-950/80 px-4 py-3 text-white placeholder:text-gray-500 focus:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-500/30" placeholder="you@example.com">
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-200" for="subject">Subject</label>
            <input id="subject" name="subject" type="text" class="mt-2 w-full rounded-3xl border border-white/10 bg-gray-950/80 px-4 py-3 text-white placeholder:text-gray-500 focus:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-500/30" placeholder="Order question, feedback, support...">
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-200" for="message">Message</label>
            <textarea id="message" name="message" rows="5" required class="mt-2 w-full rounded-3xl border border-white/10 bg-gray-950/80 px-4 py-3 text-white placeholder:text-gray-500 focus:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-500/30" placeholder="Hi, I’d like to ask..."></textarea>
          </div>

          <button type="submit" class="inline-flex items-center justify-center rounded-3xl bg-purple-600 px-6 py-3 text-sm font-semibold text-white transition hover:bg-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-500/30">
            Send Message
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php
include 'partials/footer.php';
?>
