# Disable_TNT

TNT explosion block protection for Axolotl-PM API 5.

[![CI](https://github.com/NhanAZ-Plugins/Disable_TNT/actions/workflows/build.yml/badge.svg)](https://github.com/NhanAZ-Plugins/Disable_TNT/actions/workflows/build.yml)
[![Latest release](https://img.shields.io/github/v/release/NhanAZ-Plugins/Disable_TNT)](https://github.com/NhanAZ-Plugins/Disable_TNT/releases/latest)
[![Discord](https://img.shields.io/discord/986553214889517088?label=Discord&logo=discord&logoColor=white&color=5865F2)](https://discord.gg/j2X83ujT6c)

## Overview

This plugin targets the PocketMine-MP and Axolotl-PM API 5 ecosystem and is maintained under [NhanAZ-Plugins](https://github.com/NhanAZ-Plugins).

## Compatibility and verification

- Minimum Axolotl-PM API: `5.0.0`.
- The workflow checks PHPStan at maximum level and builds the plugin against pinned API 5.0.0 and 5.49.1 source revisions.
- CI smoke-tests the built PHAR on the official Axolotl-PM 5.49.1 server release. See the [workflow runs](https://github.com/NhanAZ-Plugins/Disable_TNT/actions).
- The test fixture verifies that TNT explosions are changed and other entity explosions are left alone. It does not replace an in-game explosion test.

## History and attribution

The original source was committed by NhanAZ. The historical manifest credits Ghast Noob for editing and Vietnamese localization. Older translated descriptions are preserved in the [initial source history](https://github.com/NhanAZ-Plugins/Disable_TNT/commits/main/).

## Build

The GitHub Actions workflow uses [DevTools](https://github.com/NhanAZ/DevTools) to analyze, build and validate the plugin PHAR.
