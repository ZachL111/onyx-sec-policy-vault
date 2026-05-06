# Onyx Sec Policy Vault Walkthrough

This note is the quickest way to read the extra review model in `onyx-sec-policy-vault`.

| Case | Focus | Score | Lane |
| --- | --- | ---: | --- |
| baseline | trust boundary | 135 | watch |
| stress | claim drift | 108 | watch |
| edge | replay exposure | 208 | ship |
| recovery | policy width | 257 | ship |
| stale | trust boundary | 118 | watch |

Start with `recovery` and `stress`. They create the widest contrast in this repository's fixture set, which makes them better review anchors than the middle cases.

The useful comparison is `policy width` against `claim drift`, not the raw score alone.
