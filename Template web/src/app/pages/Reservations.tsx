import { motion } from "motion/react";
import { useState } from "react";
import { Calendar, Clock, Users, Search, MapPin, Star } from "lucide-react";
import { ImageWithFallback } from "../components/figma/ImageWithFallback";

export function Reservations() {
  const [searchQuery, setSearchQuery] = useState("");

  const bookings = [
    {
      id: 1,
      title: "Hôtel Resort Paradis",
      location: "Bali, Indonésie",
      image: "https://images.unsplash.com/photo-1759178389699-14e2a2e932b0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxob3RlbCUyMHJlc29ydCUyMGJvb2tpbmd8ZW58MXx8fHwxNzc1MjI0MzY1fDA&ixlib=rb-4.1.0&q=80&w=1080",
      date: "15 Mai - 22 Mai 2026",
      guests: 2,
      price: "€1,250",
      status: "Confirmé",
      rating: 4.8,
    },
    {
      id: 2,
      title: "Appartement Luxury Suite",
      location: "Paris, France",
      image: "https://images.unsplash.com/photo-1638454668466-e8dbd5462f20?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxsdXh1cnklMjBhcGFydG1lbnQlMjBiZWRyb29tfGVufDF8fHx8MTc3NTIyNDM2Nnww&ixlib=rb-4.1.0&q=80&w=1080",
      date: "3 Juin - 10 Juin 2026",
      guests: 4,
      price: "€980",
      status: "En attente",
      rating: 4.6,
    },
    {
      id: 3,
      title: "Villa sur la Plage",
      location: "Maldives",
      image: "https://images.unsplash.com/photo-1747019554053-57482a49b482?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxiZWFjaCUyMHZpbGxhJTIwdmFjYXRpb258ZW58MXx8fHwxNzc1MjI0MzY2fDA&ixlib=rb-4.1.0&q=80&w=1080",
      date: "1 Juillet - 15 Juillet 2026",
      guests: 6,
      price: "€3,500",
      status: "Confirmé",
      rating: 5.0,
    },
    {
      id: 4,
      title: "Chalet Montagne",
      location: "Alpes Suisses",
      image: "https://images.unsplash.com/photo-1701825299870-398fb12864bb?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxtb3VudGFpbiUyMGNhYmluJTIwcmV0cmVhdHxlbnwxfHx8fDE3NzUyMjQzNjd8MA&ixlib=rb-4.1.0&q=80&w=1080",
      date: "20 Décembre - 5 Janvier 2027",
      guests: 8,
      price: "€2,800",
      status: "En attente",
      rating: 4.9,
    },
  ];

  return (
    <div className="container mx-auto px-6 py-12">
      {/* Header */}
      <motion.div
        initial={{ opacity: 0, y: -20 }}
        animate={{ opacity: 1, y: 0 }}
        className="mb-12"
      >
        <h1 className="text-5xl font-bold text-white mb-4 drop-shadow-lg">
          Mes Réservations
        </h1>
        <p className="text-xl text-white/90 drop-shadow-md">
          Gérez vos réservations d'hébergements et d'activités
        </p>
      </motion.div>

      {/* Search Bar */}
      <motion.div
        initial={{ opacity: 0, y: 20 }}
        animate={{ opacity: 1, y: 0 }}
        transition={{ delay: 0.2 }}
        className="mb-8"
      >
        <div className="relative max-w-2xl">
          <Search className="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 w-5 h-5" />
          <input
            type="text"
            placeholder="Rechercher une réservation..."
            value={searchQuery}
            onChange={(e) => setSearchQuery(e.target.value)}
            className="w-full pl-12 pr-4 py-4 rounded-2xl bg-white/90 backdrop-blur-md shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
          />
        </div>
      </motion.div>

      {/* Bookings Grid */}
      <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
        {bookings.map((booking, index) => (
          <motion.div
            key={booking.id}
            initial={{ opacity: 0, scale: 0.9 }}
            animate={{ opacity: 1, scale: 1 }}
            transition={{ delay: 0.1 * index }}
            whileHover={{ scale: 1.02, y: -5 }}
            className="group bg-white/90 backdrop-blur-md rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all cursor-pointer"
          >
            {/* Image */}
            <div className="relative h-56 overflow-hidden">
              <motion.div
                whileHover={{ scale: 1.1 }}
                transition={{ duration: 0.6 }}
                className="w-full h-full"
              >
                <ImageWithFallback
                  src={booking.image}
                  alt={booking.title}
                  className="w-full h-full object-cover"
                />
              </motion.div>
              
              {/* Status Badge */}
              <motion.div
                initial={{ opacity: 0, x: -20 }}
                animate={{ opacity: 1, x: 0 }}
                className={`absolute top-4 left-4 px-4 py-2 rounded-full font-semibold text-sm ${
                  booking.status === "Confirmé"
                    ? "bg-green-500 text-white"
                    : "bg-yellow-500 text-white"
                }`}
              >
                {booking.status}
              </motion.div>

              {/* Rating */}
              <div className="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full flex items-center gap-1">
                <Star className="w-4 h-4 fill-yellow-400 text-yellow-400" />
                <span className="font-semibold text-sm">{booking.rating}</span>
              </div>
            </div>

            {/* Content */}
            <div className="p-6">
              <h3 className="text-2xl font-bold text-gray-800 mb-2">
                {booking.title}
              </h3>
              
              <div className="flex items-center gap-2 text-gray-600 mb-4">
                <MapPin className="w-4 h-4" />
                <span>{booking.location}</span>
              </div>

              <div className="space-y-3 mb-6">
                <div className="flex items-center gap-3 text-gray-700">
                  <Calendar className="w-5 h-5 text-blue-600" />
                  <span>{booking.date}</span>
                </div>
                
                <div className="flex items-center gap-3 text-gray-700">
                  <Users className="w-5 h-5 text-blue-600" />
                  <span>{booking.guests} personnes</span>
                </div>
              </div>

              <div className="flex items-center justify-between pt-4 border-t border-gray-200">
                <div>
                  <div className="text-sm text-gray-500">Prix total</div>
                  <div className="text-2xl font-bold text-blue-600">
                    {booking.price}
                  </div>
                </div>

                <motion.button
                  whileHover={{ scale: 1.05 }}
                  whileTap={{ scale: 0.95 }}
                  className="px-6 py-3 bg-gradient-to-r from-blue-500 to-blue-700 text-white rounded-xl font-semibold shadow-lg"
                >
                  Détails
                </motion.button>
              </div>
            </div>
          </motion.div>
        ))}
      </div>

      {/* Add New Booking Button */}
      <motion.div
        initial={{ opacity: 0, y: 20 }}
        animate={{ opacity: 1, y: 0 }}
        transition={{ delay: 0.6 }}
        className="mt-12 text-center"
      >
        <motion.button
          whileHover={{ scale: 1.05 }}
          whileTap={{ scale: 0.95 }}
          className="px-10 py-4 bg-white/90 backdrop-blur-md text-blue-600 rounded-2xl font-bold text-lg shadow-xl hover:shadow-2xl transition-all"
        >
          + Nouvelle Réservation
        </motion.button>
      </motion.div>
    </div>
  );
}
