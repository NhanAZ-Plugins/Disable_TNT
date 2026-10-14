# Disable_TNT

Disable_TNT prevents primed TNT from breaking blocks while preserving its explosion. Other entity and block explosions keep their normal block behavior.

## Compatibility and verification

- Minimum Axolotl-PM API: `5.0.0`.
- The workflow checks PHPStan at maximum level and builds the plugin against pinned API 5.0.0 and 5.49.1 source revisions.
- CI smoke-tests the built PHAR on the official Axolotl-PM 5.49.1 server release. See the [workflow runs](https://github.com/NhanAZ-Plugins/Disable_TNT/actions).
- The test fixture verifies that TNT explosions are changed and other entity explosions are left alone. It does not replace an in-game explosion test.

## History and attribution

The original source was committed by NhanAZ. The historical manifest credits Ghast Noob for editing and Vietnamese localization. Older translated descriptions are preserved in the [initial source history](https://github.com/NhanAZ-Plugins/Disable_TNT/commits/main/).

## Build

The GitHub Actions workflow uses [DevTools](https://github.com/NhanAZ/DevTools) to analyze, build and validate the plugin PHAR.

For questions about the NhanAZ ecosystem, visit [NhanAZ Discord](https://discord.gg/j2X83ujT6c).
