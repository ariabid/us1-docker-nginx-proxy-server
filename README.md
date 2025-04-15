# Docker Compose with Nginx Proxy

This project demonstrates a Docker Compose setup with Nginx acting as a reverse proxy for multiple backend services.

## Services

- **Nginx Proxy**: Main entry point (Port 80)
- **App1**: Nginx-based service (internal port 8080)
- **App2**: Apache-based service (internal port 8080)

## Network Configuration

- Frontend network: Exposes Nginx to the host
- Backend network: Internal communication between services

## Usage

1. Start the services:
   ```bash
   docker-compose up -d
   ```

2. Access the services:
   - Main welcome page: `http://localhost/`
   - App1: `http://localhost/app1`
   - App2: `http://localhost/app2`

3. Stop the services:
   ```bash
   docker-compose down
   ```

## Health Checks

All services are configured with restart policies for reliability.