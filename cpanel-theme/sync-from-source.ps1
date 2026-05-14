param(
    [string]$Source = "wp-theme/kolseg-design-services",
    [string]$Target = "cpanel-theme/kolseg-design-services"
)

$sourcePath = Join-Path (Get-Location) $Source
$targetPath = Join-Path (Get-Location) $Target

if (-not (Test-Path $sourcePath)) {
    throw "Source theme folder not found: $sourcePath"
}

if (Test-Path $targetPath) {
    Remove-Item $targetPath -Recurse -Force
}

Copy-Item $sourcePath $targetPath -Recurse
Write-Host "Synced cPanel deploy theme to $targetPath"
