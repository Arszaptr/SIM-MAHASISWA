<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

$kodeRole = $_SESSION['kode_role'] ?? '';
$currentPage = basename($_SERVER['PHP_SELF'] ?? '');
$isAdmin = ($kodeRole === 'ADMIN');
$canManageStudents = in_array($kodeRole, ['ADMIN', 'OPERATOR_PRODI'], true);
$canViewReports = in_array($kodeRole, ['ADMIN', 'DEKANAT', 'REKTORAT'], true);
$canViewAudit = in_array($kodeRole, ['ADMIN', 'OPERATOR_PRODI'], true);

function sidebar_link(string $href, string $icon, string $label, string $currentPage): void
{
    $active = basename($href) === $currentPage ? ' active' : '';
    echo '<a href="' . htmlspecialchars($href, ENT_QUOTES, 'UTF-8') . '" class="sidebar-link' . $active . '">';
    echo '<span>' . $icon . '</span> ' . htmlspecialchars($label, ENT_QUOTES, 'UTF-8') . '</a>' . "\n";
}
?>
<aside class="sidebar" id="sidebar">
    <div class="sidebar-title">MENU UTAMA</div>
    <?php sidebar_link('dashboard.php', '▦', 'Dashboard', $currentPage); ?>

    <?php if ($canManageStudents || $isAdmin): ?>
        <div class="sidebar-title">DATA AKADEMIK</div>
        <?php if ($canManageStudents): ?>
            <?php sidebar_link('mahasiswa.php', '👨‍🎓', 'Data Mahasiswa', $currentPage); ?>
        <?php endif; ?>
        <?php if ($isAdmin): ?>
            <?php sidebar_link('fakultas.php', '🏛', 'Fakultas', $currentPage); ?>
            <?php sidebar_link('program_studi.php', '📚', 'Program Studi', $currentPage); ?>
            <?php sidebar_link('pengguna.php', '👥', 'Pengguna', $currentPage); ?>
            <?php sidebar_link('role.php', '🔐', 'Role', $currentPage); ?>
        <?php endif; ?>
    <?php endif; ?>

    <?php if ($canViewReports): ?>
        <div class="sidebar-title">LAPORAN</div>
        <?php sidebar_link('laporan_mahasiswa.php', '📊', 'Rekap Mahasiswa', $currentPage); ?>
    <?php endif; ?>

    <?php if ($canViewAudit): ?>
        <div class="sidebar-title">SISTEM</div>
        <?php sidebar_link('audit_log.php', '📝', 'Audit Log', $currentPage); ?>
    <?php endif; ?>

    <?php if ($kodeRole === 'MAHASISWA'): ?>
        <div class="sidebar-title">AKUN SAYA</div>
        <?php sidebar_link('mahasiswa_profil.php', '👤', 'Profil Saya', $currentPage); ?>
    <?php endif; ?>
</aside>
