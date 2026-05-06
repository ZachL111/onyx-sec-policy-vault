# Review Journal

This journal records the domain cases that matter before widening the public API.

The local checks classify each case as `ship`, `watch`, or `hold`. That gives the project a small review vocabulary that matches its security tooling focus without claiming live deployment or external usage.

## Cases

- `baseline`: `trust boundary`, score 135, lane `watch`
- `stress`: `claim drift`, score 108, lane `watch`
- `edge`: `replay exposure`, score 208, lane `ship`
- `recovery`: `policy width`, score 257, lane `ship`
- `stale`: `trust boundary`, score 118, lane `watch`

## Note

A future change should add new cases before it changes the scoring rule.
